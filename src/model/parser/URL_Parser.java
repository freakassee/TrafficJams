package model.parser;


import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.URL;
import java.net.URLConnection;
import java.util.ArrayList;

import model.string.StringManipulation;

public class URL_Parser {
	private ArrayList<String[]> streetsInfo = new ArrayList<String[]>();
	
	public void startConnection(URL connectionURL,String contentTag) throws Exception {
		// Set URL
		URLConnection spoof = connectionURL.openConnection();
		// Spoof the connection so we look like a web browser
		// spoof.setRequestProperty( "User-Agent",
		// "Mozilla/15.0 (compatible; MSIE 5.5; Windows NT 5.0; H010818)" );
		BufferedReader in = new BufferedReader(new InputStreamReader(spoof.getInputStream()));
		String strLine = "";
		// Loop through every line in the source
		while ((strLine = in.readLine()) != null) {
			if (strLine.contains(contentTag)) {
				//complete line
				//System.out.println(strLine);
				String shortStrLine = strLine.substring(strLine.indexOf(contentTag));
				//shortend line
				//System.out.println(shortStrLine);

				String cleanedLine = StringManipulation.deleteIntervalString(shortStrLine,"<",">");
				streetsInfo.add(cleanedLine.split(",")); 
				//System.out.println(cleanedLine);
				System.out.println("");
				
// 				shortStrLine.contains("<strong class=\"name\">");
//				String[] streets = shortStrLine.split("<strong class=\"name\">");			
//				for (int i = 1; i < streets.length; i++) {	
//					streets[i]= 0;
//					streetsInfo.add(StringManipulation.deleteTags(streets[i]).split(","));
//
//				}

				

				break;
			}
		}
		
		System.out.println(streetsInfo.get(0)[0]);
		
	}
	
	
	public String toString(){
		for (int j = 0; j < streetsInfo.size(); j++) {
			for (int i = 0; i < streetsInfo.get(j).length; i++) {
				 System.out.println(streetsInfo.get(j)[i]);
			}
		}
		return "";
	}
			

	

}