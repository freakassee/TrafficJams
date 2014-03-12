package main;
import java.net.URL;

import model.parser.URL_Parser;

public class GetTrafficJams {
	public static void main(String[] args) {

		try {
			// Calling the Connect method
			URL einsLiveURL = new URL("http://www.einslive.de/magazin/nachrichten/stauschau/index.jsp");
			String START_TAG = "<!-- includes/stauschau start -->";
			URL_Parser einsLive = new URL_Parser();
			einsLive.startConnection(einsLiveURL,START_TAG);
			einsLive.toString();
		} catch (Exception e) {

		}
	}
}
