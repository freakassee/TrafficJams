package test.PostgreSQL_JDBC.traffic;

public class MainSpecial {

	public static void main(String[] args) {
		try {
			CreateTrafficTable j = new CreateTrafficTable("trafficjam");

		} catch (Exception e) {
			System.out.println("Already Exist");
		}
	InsertIntoTraffic i = new InsertIntoTraffic("trafficjam");
	}

}
