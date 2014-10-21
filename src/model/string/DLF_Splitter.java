package model.string;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class DLF_Splitter {

	protected String motorway, dirFrom, dirTo, locStart, locEnd, type, flow, descr, trafficJam;
	protected int length;
	protected ArrayList<String> unsortedTrafficJams = new ArrayList<String>();
	protected String r = "Richtung";
	protected String z = "zwischen";
	protected ArrayList<String> tjList = new ArrayList<String>();

	protected String[] startWithAbzweig = { "Abzweig" };

	protected ArrayList<String> wordsBefore = new ArrayList<String>(Arrays.asList("Kreuz", "Bad", "Dreieck", "Flughafen", "Groß", "Westkreuz", "Rastplatz", "Raststätte am", "Grenzübergang", "Hann."));
	protected ArrayList<String> wordsAfter = new ArrayList<String>(Arrays.asList("Brücke", "Ost", "Nord", "Süd", "West", "Kreuz", "(Harz)", "a. Ammersee ", "Hockenheimring", "Ei"));

	public DLF_Splitter(ArrayList<String> trafficJamList) {
		for (int i = 0; i < trafficJamList.size(); i++) {
			motorway = "";
			dirFrom = "";
			dirTo = "";
			locStart = "";
			locEnd = "";
			type = "";
			flow = "";
			descr = "";
			length = 0;

			boolean isDefaultFinding = true;
			boolean isAdvancedFinding = false;

			trafficJam = trafficJamList.get(i);

			ArrayList<String> sentenceOfTrafficJam = new ArrayList<String>(Arrays.asList(trafficJam.split(" ")));

			motorway = sentenceOfTrafficJam.get(0);
			sentenceOfTrafficJam.remove(0);

			sentenceOfTrafficJam.contains("Richtung");
			int indexOfRichtung = sentenceOfTrafficJam.indexOf("Richtung");

			sentenceOfTrafficJam.contains("zwischen");
			int indexOfZwischen = sentenceOfTrafficJam.indexOf("zwischen");
			
			
			if (isDefaultFinding) {
				for (int j = 0; j < wordsBefore.size(); j++) {
					if (sentenceOfTrafficJam.contains(wordsBefore.get(j))) {

					}
				}

			}

			
			// if (trafficJam.contains(r) && trafficJam.contains(z) &&
			// indexOfRichtung > 0 && indexOfRichtung < 4 && indexOfZwischen > 0
			// && indexOfZwischen < 6) {

			// }

			// } else {
			// unsortedTrafficJams.add(trafficJam);
			// }

		}

		System.out.println();
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

}
