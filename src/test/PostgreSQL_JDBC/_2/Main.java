package test.PostgreSQL_JDBC._2;

public class Main {

	public static void main(String[] args) {
		try {
			JDBC_Create j = new JDBC_Create();

		} catch (Exception e) {
			System.out.println("Already Exist");
		}
		JDBC_Insert i = new JDBC_Insert();
	}

}
