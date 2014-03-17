package model.request;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.URL;
import java.net.URLConnection;



public class RequestSender {

	protected final String osmGeocoderUrl = "http://nominatim.openstreetmap.org/search.php?format=json&json_callback=showResultsGeocode&q=";
	public void startConnection(/* URL connectionURL */String location) throws Exception {
		// Set URL
		URL osmSearchUrl = new URL(osmGeocoderUrl + location);
		URLConnection spoof = osmSearchUrl.openConnection();
		BufferedReader in = new BufferedReader(new InputStreamReader(spoof.getInputStream()));
		String strLine = "";
		// Loop through every line in the source
		while ((strLine = in.readLine()) != null) {
			// complete line
			System.out.println(strLine);
			// shortend line
			// System.out.println(shortStrLine);

			// System.out.println("");

		}

	}

}
