package test.PostgreSQL_JDBC._2;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;

public class JDBC_Create {

	protected Connection c = null;
	protected Statement stmt = null;
	protected PreparedStatement pstmt = null;

	public JDBC_Create() {

		try {
			Class.forName("org.postgresql.Driver");

			c = DriverManager.getConnection("jdbc:postgresql://localhost:5433/testdb", "postgres", "postgres");
			c.setAutoCommit(false);
			

			stmt = c.createStatement();
			String sql = "CREATE TABLE epictable" + 
			"(" + 
			"mytable_key    serial primary key," +
			"moobars        VARCHAR(40) not null," + 
			"foobars        DATE" + 
			")";

			stmt.executeUpdate(sql);
			stmt.close();
			
			c.commit();
			c.close();

			System.out.println("Opened database successfully");
		} catch (Exception e) {
			System.out.println("Already Exist");
		}
	}

}
