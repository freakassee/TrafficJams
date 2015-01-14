package test.PostgreSQL_JDBC;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;

public class _01Create_traffic {
	public static void main(String args[]) {
		Connection c = null;
		Statement stmt = null;
		try {


		} catch (Exception e) {
			System.err.println(e.getClass().getName() + ": " + e.getMessage());
			System.exit(0);
		}
		System.out.println("Table created successfully");
	}
}