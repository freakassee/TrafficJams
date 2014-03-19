package test.PostgreSQL_JDBC;

import java.sql.Connection;
import java.sql.DriverManager;

public class _02Opening_traffic {
	public static void main(String args[]) {
		Connection c = null;
		try {
			Class.forName("org.postgresql.Driver");
			c = DriverManager.getConnection("jdbc:postgresql://localhost:5432/traffic_first", "traffic", "traffic");
		} catch (Exception e) {
			e.printStackTrace();
			System.err.println(e.getClass().getName() + ": " + e.getMessage());
			System.exit(0);
		}
		System.out.println("Opened database successfully");
	}
}