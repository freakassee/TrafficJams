package test_PostgreSQL_JDBC;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;

public class _01Create_traffic {
	public static void main(String args[]) {
		Connection c = null;
		Statement stmt = null;
		try {
			Class.forName("org.postgresql.Driver");
			c = DriverManager.getConnection("jdbc:postgresql://localhost:5432/traffic_first", "traffic", "traffic");
			System.out.println("Opened database successfully");

			stmt = c.createStatement();
			String sql = "CREATE TABLE TRAFFIC " 
				+ "(ID 				BIGINT 	PRIMARY KEY 	NOT NULL," 
				+ " MOTORWAY 		CHAR(5)					NOT NULL,"
				+ " DIR_FROM		TEXT 					NOT NULL,"
				+ " DIR_TO 		TEXT 					NOT NULL,"
				+ " LOC_START		TEXT    				NOT NULL,"
				+ " LOC_END			TEXT    				NOT NULL," 
				+ " TYPE 			TEXT    						,"
				+ " LENGTH     		TEXT					NOT NULL," 
				+ " FLOW      		TEXT								)";
			stmt.executeUpdate(sql);
			stmt.close();
			c.close();
		} catch (Exception e) {
			System.err.println(e.getClass().getName() + ": " + e.getMessage());
			System.exit(0);
		}
		System.out.println("Table created successfully");
	}
}