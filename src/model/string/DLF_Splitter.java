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
	protected ArrayList<String> zusaetze = new ArrayList<String>(
			Arrays.asList("Bad", "Ostumfahrung", "Westumfahrung", "Nordumfahrung", "S�dumfahrung",
					"Heilbad","Hessisch","Hohen","Horn-Bad","K�nigs","M�rkisch"));
	//http://de.wikipedia.org/wiki/Liste_der_St%C3%A4dte_in_Deutschland
	protected ArrayList<String> notUsedYet = new ArrayList<String>(Arrays.asList("Elbe", "Leine",
			"Lumda", "Saale", "Westerwald", "Hansestadt", "Altmark", "Harz", "Eder", "Unterweser", 
			"Oder",	"R�gen", "Bergisch", "Odenwald","Anhalt","Donau","Pfalz","Lutherstadt",
			"Jagst","Lausitz","Unstrut","Wohra","Ostsee","Westf.","Schwaben","Ems","Bergstra�e",
			"Werre","Elster","Neckar","Sieg","Efze","Ohm","Milde","Kyffh�user","Taunus","Allg�u",
			"Hunsr�ck","Anhalt","Rheinland","Baden","Ostfriesland","Bodensee","Mark","Oldenburg",
			"Spreewald","Wendland","Sauerland","Geiseltal","Veit","Dosse","Wald","Oldb","Bode",
			""
			
			));

	protected ArrayList<String> notUsedYet2 = new ArrayList<String>(Arrays.asList("am Trifels", 
			"bei N�rnberg", "im Fichtelgebirge", "in der Oberpfalz", 
			"vor der H�he", "im Harz", "am Deister",
			"an der Saale", "am Taunus", "auf R�gen", "bei Berlin", 
			"a. d. Eigen", "an der Ri�", "am Rhein", "an der Rh�n", 
			"im Schwarzwald", "an der Havel", "Freie Hansestadt",
			"in der Nordheide","M�rkische Schweiz",
			"an der Altm�hl", "an der Donau","am Teutoburger Wald",
			"am Kaiserstuhl","am Main","am Neckar","im Breisgau",
			"bei M�nchen","an der Steige","an der Brenz","an der Fils",
			"im Kinzigtal","am Harz","an der Aisch","in Unterfranken",
			"an der Eger","im Allg�u","an der Jagst","unter Teck",
			"in Bayern","am Elm","im Taunus","S�chsische Schweiz",
			"am See","an der Isar","in der Pfalz","am Lech","an der Unstrut",
			"an der Pegnitz","an der Lahn", "am Inn","an der Ruhr",
			"am Kocher","am Rennweg","am Waldnaab","am Kulm","am R�benberge",
			"an der Orla","an der Weinstra�e","bei Coburg", "in Holstein","in Sachsen",
			"am Brocken","vor der Rh�n"
			
			
			
			));
	
	// O fertig, 
	protected ArrayList<String> tjList = new ArrayList<String>();

	protected String[] startWithAbzweig = { "Abzweig" };

	protected ArrayList<String> wordsBefore = new ArrayList<String>(Arrays.asList("Kreuz", "Bad", "Dreieck", "Flughafen", "Gro�", "Westkreuz", "Rastplatz", "Rastst�tte am", "Grenz�bergang", "Hann."));
	protected ArrayList<String> wordsAfter = new ArrayList<String>(Arrays.asList("Br�cke", "Ost", "Nord", "S�d", "West", "Kreuz", "(Harz)", "a. Ammersee ", "Hockenheimring", "Ei"));

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

			boolean isDefaultFinding = false;
			boolean isAdvancedFinding = false;

			trafficJam = trafficJamList.get(i);

			ArrayList<String> sentenceOfTrafficJam = new ArrayList<String>(Arrays.asList(trafficJam.split(" ")));

			motorway = sentenceOfTrafficJam.get(0);
			sentenceOfTrafficJam.remove(0);
			
			for (int j = 0; j < zusaetze.size(); j++) {
				if(zusaetze.contains(sentenceOfTrafficJam.get(0))){
					locStart = zusaetze.get(j);
					sentenceOfTrafficJam.remove(0);
				}		
			}
			
			sentenceOfTrafficJam.contains("Richtung");
			int indexOfRichtung = sentenceOfTrafficJam.indexOf("Richtung");

			sentenceOfTrafficJam.contains("zwischen");
			int indexOfZwischen = sentenceOfTrafficJam.indexOf("zwischen");
			
			
			
			if (indexOfRichtung == 1 && indexOfZwischen ==3) {
				isDefaultFinding = true;
				
			}else{
				unsortedTrafficJams.add(trafficJam);
				break;
			}
			if (isDefaultFinding) {
				dirFrom = sentenceOfTrafficJam.get(0);
				sentenceOfTrafficJam.remove(0);
				sentenceOfTrafficJam.remove(0);
				dirTo= sentenceOfTrafficJam.get(0);
				sentenceOfTrafficJam.remove(0);
				
				
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
		int index = 1000;
		for (int i = 0; i < words.length; i++) {
			if (trafficJam.startsWith(words[i])) {
				return i;
			}

		}
		return index;
	}

}
