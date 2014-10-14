package model.string;

import java.util.ArrayList;

public class DLF_Converter {

	protected String motorway, dirFrom, dirTo, locStart, locEnd, type, flow, descr, trafficJam;
	protected int length;
	protected ArrayList<String> unsortedTrafficJams = new ArrayList<String>();
	protected String r = "Richtung";
	protected String z = "zwischen";
	protected String[] startWithAbzweig = { "Abzweig" };
	protected String[] wordsBefore = { "Kreuz", "Bad", "Dreieck", "Flughafen", "Groß", "Westkreuz", "Rastplatz", "Raststätte am" };
	protected String[] wordsAfter = { "Brücke", "Ost", "Nord", "Süd", "West", "Kreuz", "(Harz)", "a. Ammersee", "Hockenheimring", "Ei" };

	public DLF_Converter(ArrayList<String> trafficJamList) {
		for (int i = 0; i < trafficJamList.size(); i++) {
			motorway = "";
			dirFrom = "";
			dirTo = "";
			locStart = "";
			locEnd = "";
			type = "";
			flow = "";
			descr = "";

			trafficJam = trafficJamList.get(i);
//error!
			int indexOfRichtung = getIndexOfWord(r);
			int indexOfZwischen = getIndexOfWord(z);

			if (trafficJam.contains(r) && trafficJam.contains(z) && indexOfRichtung > 0 && indexOfRichtung < 4 && indexOfZwischen > 0 && indexOfZwischen < 6) {

				motorway = shortString(" ");

				defineDirections();
				defineLocations();

			} else {
				unsortedTrafficJams.add(trafficJam);
			}

		}

		System.out.println();
	}

	protected int getNumberOfWords() {
		String tmp = trafficJam;
		int index = 1;

		while (trafficJam.contains(" ")) {
			index++;
			shortString(" ");
		}

		trafficJam = tmp;
		return index;
	}

	protected int getIndexOfWord(String word) {
		String tmp = trafficJam;
		int index = 0;

		while (trafficJam.contains(word)) {
			index++;

			String tmpword = shortString(" ");
			if (tmpword.equalsIgnoreCase(word)) {
				break;
			}
		}

		trafficJam = tmp;
		return index;
	}

	private void defineDirections() {

		dirFrom = shortString(r);

		dirTo = shortString(z);

	}

	private void defineLocations() {

		locStart = shortString("und");
		int wordIndexOfBefore = doesSentenceStartWithWords(wordsBefore);
		
		
		if(trafficJam.startsWith("Tunnel")){
			
			locEnd = shortString("Tunnel")+ shortString(" ") + shortString(" ");
		}
		
		if (wordIndexOfBefore >= 0) {

			locEnd = shortString(wordsBefore[wordIndexOfBefore]);
		}
		int wordIndexOfAfter = doesSentenceStartWithWords(wordsAfter);
		locEnd = locEnd + shortString(" ");
		if (wordIndexOfAfter >= 0) {
			locEnd = shortString(wordsBefore[wordIndexOfAfter]);
		}
		System.out.println(motorway + " " + dirFrom + "Richtung: " + dirTo + " zwischen: " + locStart + "und: " + locEnd);

	}

	protected int doesSentenceStartWithWords(String[] words) {
		int index = -1;
		for (int i = 0; i < words.length; i++) {
			if (trafficJam.startsWith(words[i])) {
				return i;
			}

		}
		return index;
	}

	protected String shortString(String charSequenceToSearchFor) {
		String extractedString = trafficJam.substring(0, trafficJam.indexOf(charSequenceToSearchFor));
		trafficJam = trafficJam.substring(trafficJam.indexOf(charSequenceToSearchFor));
		trafficJam = trafficJam.replaceFirst(charSequenceToSearchFor, "").trim();
		return extractedString;

	}

}
