package main;


import model.request.RequestSender;

public class GetOSMFields {
	public static void main(String[] args) {

		try {
			// Calling the Connect method
			String location = "Burscheid";
			
			//String START_TAG = "<!-- includes/stauschau start -->";
			RequestSender osm = new RequestSender();
			osm.startConnection(location);
			//osm.toString();
		} catch (Exception e) {

		}
	}
}
