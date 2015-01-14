package test.PostgreSQL_JDBC.traffic;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.Statement;
import java.util.ArrayList;

public class InsertIntoTraffic {

	protected Connection c = null;
	protected Statement stmt = null;
	protected PreparedStatement pstmt = null;

	public InsertIntoTraffic(String s) {

		try {
			Class.forName("org.postgresql.Driver");
			ArrayList<String> list = new ArrayList<String>();
			
			String[] exp = {"'A1'","'Bremen'","'Osnabrück'","'Groß Ippener'","'Wildeshausen-Nord'","'Baustelle'","2","'stockender Verkehr'"};
			c = DriverManager.getConnection("jdbc:postgresql://localhost:5433/testdb", "postgres", "postgres");
			c.setAutoCommit(false);
			System.out.println("Opened database successfully");
	

			stmt = c.createStatement();
			String sql = "INSERT INTO trafficjam " /*+ s +" "*/
		     + "(" 
			 + "MOTORWAY,"
			 + "DIR_FROM,"
			 + "DIR_TO,"
			 + "LOC_START,"
			 + "LOC_END,"
			 + "TYPE,"
			 + "LENGTH,	"
			 + "FLOW"
			 + ")"
			 + "VALUES ("
			 + exp[0] + ", " 
			 + exp[1] + "," 
			 + exp[2] + "," 
			 + exp[3] + "," 
			 + exp[4] + "," 
			 + exp[5] + "," 
			 + exp[6] + "," 
			 + exp[7] + ");";
			
			 stmt.executeUpdate(sql);

			
			stmt.close();
			c.commit();
			c.close();
			
		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}