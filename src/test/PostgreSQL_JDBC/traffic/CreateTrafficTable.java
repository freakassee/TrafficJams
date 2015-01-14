package test.PostgreSQL_JDBC.traffic;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;

public class CreateTrafficTable {

	protected Connection c = null;
	protected Statement stmt = null;
	protected PreparedStatement pstmt = null;

	public CreateTrafficTable(String s) {

		try {
			Class.forName("org.postgresql.Driver");

			c = DriverManager.getConnection("jdbc:postgresql://localhost:5433/testdb", "postgres", "postgres");
			c.setAutoCommit(false);
			System.out.println("Opened database successfully");

			 stmt = c.createStatement();
		
			String sql = "CREATE TABLE "+ s + " " 
			+ "(" 
			+ " ID serial primary key," 
			+ " MOTORWAY 		CHAR(5)					NOT NULL,"
			+ " DIR_FROM		TEXT 					NOT NULL,"
			+ " DIR_TO 			TEXT 					NOT NULL,"
			+ " LOC_START		TEXT    				NOT NULL,"
			+ " LOC_END			TEXT    				NOT NULL," 
			+ " TYPE 			TEXT    						,"
			+ " LENGTH     		TEXT					NOT NULL," 
			+ " FLOW      		TEXT							,"
			+ "	ENDED			TEXT							,"
			+ "	DATE_ENDED		TEXT 							)";
			
			stmt.executeUpdate(sql);
			stmt.close();


			c.commit();
			c.close();

		} catch (Exception e) {
			//System.out.println(e);
			System.out.println("Already Exist");
		}
	}
}
