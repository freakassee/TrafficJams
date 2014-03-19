package test.PostgreSQL_JDBC;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;

public class _03Insert_traffic {
	public static void main(String args[]) {
		Connection c = null;
		Statement stmt = null;
		try {
			Class.forName("org.postgresql.Driver");
			c = DriverManager.getConnection("jdbc:postgresql://localhost:5432/traffic_first", "traffic", "traffic");
			c.setAutoCommit(false);
			System.out.println("Opened database successfully");

			/*
			 * "(ID 				INT 	PRIMARY KEY 	NOT NULL," 
				+ " MOTORWAY 		CHAR(5)					NOT NULL,"
				+ " DIRECTION 		TEXT 					NOT NULL,"
				+ " START_LOCATION	TEXT    				NOT NULL,"
				+ " END_LOCATION	TEXT    				NOT NULL," 
				+ " TYPE 			TEXT    						,"
				+ " LENGTH     		TEXT					NOT NULL," 
				+ " FLOW      		TEXT								)";
			 * 
			 * */
			
			stmt = c.createStatement();
			String sql = "INSERT INTO TRAFFIC (" +
						"ID							,MOTORWAY	,DIRECTION					,START_LOCATION	,END_LOCATION	,TYPE	,LENGTH	,FLOW					) " + 
			"VALUES ("+	System.currentTimeMillis()+", 'A1'		, 'Dortmund Richtung Münster',	'Dortmund'	,'Münster'		,	''	,'3km'	,'stockender Verkehr'	);";
			stmt.executeUpdate(sql);
			

			stmt.close();
			c.commit();
			c.close();
		} catch (Exception e) {
			System.err.println(e.getClass().getName() + ": " + e.getMessage());
			System.exit(0);
		}
		System.out.println("Records created successfully");
	}
}