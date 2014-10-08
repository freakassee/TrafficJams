package model.string;

import java.util.ArrayList;

public class DLF_Converter {

	protected String motorway, dirFrom, dirTo, locStart, locEnd, type, flow, descr, trafficJam;
	protected int length;
	protected String r = "Richtung";
	protected String z = "zwischen";
	protected String[] startWithAbzweig = { "Abzweig" };
	protected String []  wordsBefore = {"Kreuz","Bad","Dreieck","Flughafen","Tunnel","Groß","Westkreuz","Rastplatz","Raststätte am", "Inning",};
	protected String[] wordsAfter = {"Brücke","Ost","Nord","Süd","West","Kreuz","(Harz)","Ammersee","Pfaffenstein","Hockenheimring","Ei"}; 

	public DLF_Converter(ArrayList<String> trafficJamList) {
		for (int i = 0; i < trafficJamList.size(); i++) {

			boolean containsDirection=false;
			boolean containsLocations=false;
			motorway = "";
			dirFrom = "";
			dirTo = "";
			locStart = "";
			locEnd = "";
			type = "";
			flow = "";
			descr = "";
			trafficJam = trafficJamList.get(i);

			//int numberOfWords = getNumberOfWords();
			
			
			
			// // if(i==81){
			// // System.out.println();
			// // }
			
			
			motorway = shortString(" ");
			
			if (trafficJam.contains(r)||getIndexOfWord(r)<5&&getIndexOfWord(r)>0) {
				containsDirection = true;
				
			}
			defineDirections(containsDirection);

			
			
			if (trafficJam.contains(z)||getIndexOfWord(z)<3&&getIndexOfWord(z)>0) {
				containsLocations = true;
				
			}
			
			defineLocations(containsLocations);
			

		}
	}

	private int getNumberOfWords() {
		String tmp = trafficJam;
		int index = 1;
		//
		while (trafficJam.contains(" ")) {
			index++;
			shortString(" ");
		}
		
		trafficJam = tmp;
		return index;
	}

	private int getIndexOfWord(String word) {
		String tmp = trafficJam;
		int index = 0;
		//
		while (trafficJam.contains(word)) {
			index++;
			shortString(" ");
		}
		trafficJam = tmp;
		return index;
	}

	private void defineDirections(boolean bothDirections) {
		if(bothDirections){
			dirFrom= shortString(r);
			shortString(" ");
			//beachte, hier muss noch mehr logik hin, wenn dirTo mehr als nur aus einem Wort bestimmt,
			//whitelist?
			dirTo = shortString(" ");
		}else{
			dirFrom= shortString(" ");
			dirTo = dirFrom;
		}
		
	}
	/*
	 * 
	 * anpassen, derzeit noch falsch!
	 */
	private void defineLocations(boolean containsLocations) {
		if(containsLocations){
			//killing "zwischen"
			//shortString("zwischen");
			shortString(" ");
			locStart= shortString("und ");
			//killing "und"
			shortString(" ");
			//beachte, hier muss noch mehr logik hin, wenn mehr als nur ein word vorhanden ist,
			//whitelist?
			if(doesSentenceStartWithWords(wordsBefore)){
				locEnd = shortString(" ") + " ";	
				}
			
			locEnd = locEnd + shortString(" ");
			if(doesSentenceStartWithWords(wordsAfter)){
			locEnd = locEnd + " " +shortString(" ");	
			}
			System.out.println(motorway + " "+dirFrom+ "Richtung: "+ dirTo +" zwischen: "+ locStart +" und: "+ locEnd);
		
		}else{
			//System.out.println("Logik überlegen. Needs to be done");
		}
		
	}

	private boolean doesSentenceStartWithWords(String[] words) {
		for (int i = 0; i < words.length; i++) {

			if (trafficJam.startsWith(words[i])) {
return true;
			}

		}
		return false;
	}

	protected String shortString(String charSequenceToSearchFor) {
		String extractedString = trafficJam.substring(0, trafficJam.indexOf(charSequenceToSearchFor));
		trafficJam = trafficJam.substring(trafficJam.indexOf(charSequenceToSearchFor)).trim();
		return extractedString;

	}

}
