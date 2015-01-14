package test.PostgreSQL_JDBC._2;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.Statement;

public class JDBC_Insert {

	protected Connection c = null;
	protected Statement stmt = null;
	protected PreparedStatement pstmt = null;

	public JDBC_Insert() {

		try {
			Class.forName("org.postgresql.Driver");

			c = DriverManager.getConnection("jdbc:postgresql://localhost:5433/testdb", "postgres", "postgres");
			c.setAutoCommit(false);
			System.out.println("Opened database successfully");

			stmt = c.createStatement();
			String sql2 = "insert into epictable(moobars,foobars) values('delicious moobars','2012-05-01')";
			stmt.executeUpdate(sql2);

			String sql3 = "insert into epictable(moobars,foobars) values('worldwide interblag','2015-05-01')";
			stmt.executeUpdate(sql3);

			stmt.close();

			c.commit();
			c.close();

		} catch (Exception e) {
			e.printStackTrace();
		}
	}
}