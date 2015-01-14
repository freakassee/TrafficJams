package model.SQL;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Date;

public class DatabaseTable {

	// protected static String tableName = "TRAFFIC_OFFEN";

	protected String dbConnection, user, password, tableName;

	// protected ArrayList<String> sortedTrafficJams;

	public DatabaseTable(String dbConnection, String user, String password, String tableName) {

		this.dbConnection = dbConnection;
		this.user = user;
		this.tableName = tableName;
		this.password = password;
		createTable();
	}

	protected boolean doesTableAlreadyExist(String tableName) {

		// Check if table is already existing
		try {
			Class.forName("org.postgresql.Driver");
			Connection c = DriverManager.getConnection(dbConnection, user, password);
			c.setAutoCommit(false);
			Statement s = c.createStatement();
			s.executeQuery("SELECT * FROM " + tableName);
			s.close();
			return true;

		} catch (Exception e) {
			System.out.println("Does not exist");
			return false;
		}

	}

	private void createTable() {

		if (!doesTableAlreadyExist(tableName)) {
			try {
				Connection c = DriverManager.getConnection(dbConnection, user, password);
				c.setAutoCommit(false);
				Statement createStatement = c.createStatement();
				String sqlQuery = "CREATE TABLE " + tableName + " (ID SERIAL PRIMARY KEY NOT NULL, MOTORWAY CHAR(5) NOT NULL, DIR_FROM TEXT NOT NULL, DIR_TO TEXT NOT NULL, LOC_START TEXT NOT NULL,"
						+ "LOC_END TEXT NOT NULL, TYPE TEXT, LENGTH BIGINT NOT NULL, FLOW TEXT, DATE_STARTED	BIGINT, DATE_ENDED BIGINT, UPDATED BOOLEAN);";
				createStatement.executeUpdate(sqlQuery);
				createStatement.close();
				c.commit();
				c.close();

			} catch (Exception e) {
				System.out.println("Error in createTable: " + e);
			}

		}

	}

	public void fillTable(ArrayList<String> sortedTrafficJams) {

		setUpdatedTo(0);
		try {

			for (int i = 0; i < sortedTrafficJams.size(); i++) {

				String[] exp = sortedTrafficJams.get(i).split(",");
				Connection c = DriverManager.getConnection(dbConnection, user, password);
				c.setAutoCommit(false);
				Statement rsStmt = c.createStatement();
				String sql = "SELECT * FROM " + tableName + " WHERE motorway = " + exp[0] + "AND dir_from = " + exp[1] + "AND dir_to=" + exp[2] + "AND loc_start=" + exp[3] + "AND loc_end=" + exp[4]
						+ "AND type=" + exp[5] + "AND length=" + exp[6] + "AND flow =" + exp[7] + ";";
				ResultSet rs = rsStmt.executeQuery(sql);

				// System.out.println();
				boolean doesExist = rs.next();

				// ResultSet rs = stmt.executeQuery(selectQuerySQL);
				if (doesExist) {

					int id = rs.getInt("id");
					String name = rs.getString("MOTORWAY");
					String dirF = rs.getString("DIR_FROM");
					String dirT = rs.getString("DIR_TO");

					System.out.println("ID = " + id);
					System.out.println("motorway = " + name);
					System.out.println("dirF = " + dirF);
					System.out.println("dirT = " + dirT);
					setUpdatedTo(id);

				} else {

					String sql2 = "INSERT INTO " + tableName + " (MOTORWAY,"
					// + "INDI,"
							+ "DIR_FROM," + "DIR_TO," + "LOC_START," + "LOC_END," + "TYPE," + "LENGTH," + "FLOW," + "DATE_STARTED," + "UPDATED" + ")" + "VALUES (" + exp[0] + ", "
							// + "'"+i+"'"+","
							+ exp[1] + "," + exp[2] + "," + exp[3] + "," + exp[4] + "," + exp[5] + "," + exp[6] + "," + exp[7] + ", " + System.currentTimeMillis() + "," + true + ");";

					Statement sqlStmt = c.createStatement();
					sqlStmt.executeUpdate(sql2);
					sqlStmt.close();
					c.commit();
				}
				rs.close();
				rsStmt.close();
				c.close();
			}

		} catch (Exception e) {
			System.out.println("Error in fillTable: " + e.getClass().getName() + ": " + e.getMessage());

		}

	}

	public void transferFinishedRows(String fromTable, String toTable) {

		try {
			Connection c = DriverManager.getConnection(dbConnection, user, password);
			c.setAutoCommit(false);
			Statement rsStmt = c.createStatement();
			Statement stmt = c.createStatement();
			String sql = "SELECT * FROM " + fromTable + " WHERE UPDATED = " + false + ";";
			ResultSet rs = rsStmt.executeQuery(sql);

			while (rs.next()) {
				int id = rs.getInt("ID");
				String MOTORWAY = "'" + rs.getString("MOTORWAY") + "'";
				String DIR_FROM = "'" + rs.getString("DIR_FROM") + "'";
				String DIR_TO = "'" + rs.getString("DIR_TO") + "'";
				String LOC_START = "'" + rs.getString("LOC_START") + "'";
				String LOC_END = "'" + rs.getString("LOC_END") + "'";
				String TYPE = "'" + rs.getString("TYPE") + "'";
				int LENGTH = rs.getInt("LENGTH");
				String FLOW = "'" + rs.getString("FLOW") + "'";
				long DATE_STARTED = rs.getLong("DATE_STARTED");
			
				String sql2 = "INSERT INTO " + toTable + " (MOTORWAY," + "DIR_FROM," + "DIR_TO," + "LOC_START," + "LOC_END," + "TYPE," + "LENGTH," + "FLOW," + "DATE_STARTED," + "DATE_ENDED" + ")"
						+ "VALUES (" + MOTORWAY + "," + DIR_FROM + "," + DIR_TO + "," + LOC_START + "," + LOC_END + "," + TYPE + "," + LENGTH + ", " + FLOW + "," + DATE_STARTED + ","
						+ System.currentTimeMillis() + ");";
				stmt.execute(sql2);
				c.commit();
				String sql3 = "DELETE FROM " + tableName + " WHERE ID =" + id;
				stmt.execute(sql3);
				c.commit();
				

			}
			rs.close();
			rsStmt.close();

		} catch (Exception e) {
			System.out.println(e);
		}

	}

	

	private void setUpdatedTo(int id) {
		boolean valueForUpdated;
		
		String whereClause = "";

		if (id == 0) {
			valueForUpdated = false;
		} else {
			
			valueForUpdated = true;
			whereClause = " WHERE ID = " + id + " ";
		}

		try {

			Connection c = DriverManager.getConnection(dbConnection, user, password);
			c.setAutoCommit(false);
			Statement updateAll = c.createStatement();
			String sql = "UPDATE " + tableName + " SET UPDATED = " + valueForUpdated + whereClause + ";";
			updateAll.execute(sql);
			updateAll.close();
			c.commit();
			c.close();

		} catch (Exception e) {
			System.out.println("Error in setUpdatedTo: " + e);
		}

	}

	/**
	 * @return the dbConnection
	 */
	public String getDbConnection() {
		return dbConnection;
	}

	/**
	 * @param dbConnection
	 *            the dbConnection to set
	 */
	public void setDbConnection(String dbConnection) {
		this.dbConnection = dbConnection;
	}

	/**
	 * @return the user
	 */
	public String getUser() {
		return user;
	}

	/**
	 * @param user
	 *            the user to set
	 */
	public void setUser(String user) {
		this.user = user;
	}

	/**
	 * @return the password
	 */
	public String getPassword() {
		return password;
	}

	/**
	 * @param password
	 *            the password to set
	 */
	public void setPassword(String password) {
		this.password = password;
	}

	/**
	 * @return the tableName
	 */
	public String getTableName() {
		return tableName;
	}

	/**
	 * @param tableName
	 *            the tableName to set
	 */
	public void setTableName(String tableName) {
		this.tableName = tableName;
	}

}
