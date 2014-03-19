package main;
import java.net.URL;
import java.util.ArrayList;

import model.parser.URL_Parser;
import model.string.EinsLiveConverter;

public class GetTrafficJams {
	public static void main(String[] args) {

		try {
			// Calling the Connect method
			URL einsLiveURL = new URL("http://www.einslive.de/magazin/nachrichten/stauschau/index.jsp");
			String START_TAG = "<!-- includes/stauschau start -->";
			String END_TAG = "<!-- includes/stauschau end -->";
			URL_Parser einsLive = new URL_Parser();
			einsLive.startConnection(einsLiveURL,START_TAG,END_TAG);
			//einsLive.toString();
			EinsLiveConverter e = new EinsLiveConverter(einsLive.getStreetsInfo());
			ArrayList<String> s = e.getSortedStreets();
			for (int i = 0; i < s.size(); i++) {
				System.out.println(s.get(i));
				
			}
			//int index = streetInfo.length;
			//MotorwayObject[] mo = new MotorwayObject(streetInfo);
			
			
		} catch (Exception e) {

		}
	}
}
