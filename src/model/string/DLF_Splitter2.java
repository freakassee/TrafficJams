package model.string;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class DLF_Splitter2 {

	protected String motorway, dirFrom, dirTo, locStart, locEnd, type, flow, descr, trafficJam;
	protected int length;
	protected ArrayList<String> unsortedTrafficJams = new ArrayList<String>();
	protected String r = "Richtung";
	protected String z = "zwischen";
	protected ArrayList<String> zusaetze = new ArrayList<String>(Arrays.asList("Bad", "Sankt", "Schw�bisch", "Ostumfahrung", "Westumfahrung", "Nordumfahrung", "S�dumfahrung", "Heilbad", "Hessisch",
			"Hohen", "Horn-Bad", "K�nigs", "M�rkisch", "Preu�isch", "Schlo�", "S�dliches", "Grenz�bergang", "Abzweig"));
	// http://de.wikipedia.org/wiki/Liste_der_St%C3%A4dte_in_Deutschland
	protected ArrayList<String> notUsedYet = new ArrayList<String>(Arrays.asList("Elbe", "Leine", "Lumda", "Saale", "Westerwald", "Hansestadt", "Altmark", "Harz", "Eder", "Unterweser", "Oder",
			"R�gen", "Bergisch", "Odenwald", "Anhalt", "Donau", "Pfalz", "Lutherstadt", "Jagst", "Lausitz", "Unstrut", "Wohra", "Ostsee", "Westf.", "Schwaben", "Ems", "Bergstra�e", "Werre", "Elster",
			"Neckar", "Sieg", "Efze", "Ohm", "Milde", "Kyffh�user", "Taunus", "Allg�u", "Hunsr�ck", "Anhalt", "Rheinland", "Baden", "Ostfriesland", "Bodensee", "Mark", "Oldenburg", "Spreewald",
			"Wendland", "Sauerland", "Geiseltal", "Veit", "Dosse", "Wald", "Oldb", "Bode", "Westfalica", "Wetterau", "Holstein", "Aller", "W�mme", "a.d.Laaber", "Hohentwiel", "Eifel", "Uckermark",
			"Rh�n", "Niederrhein", "M�ritz", "Havel", "Westfalen", "Ei", "M�nden/Lutterberg", "Mitte"));

	protected ArrayList<String> notUsedYet2 = new ArrayList<String>(Arrays.asList("am Trifels", "bei N�rnberg", "im Fichtelgebirge", "in der Oberpfalz", "vor der H�he", "im Harz", "am Deister",
			"an der Saale", "am Taunus", "auf R�gen", "bei Berlin", "a. d. Eigen", "an der Ri�", "am Rhein", "an der Rh�n", "im Schwarzwald", "an der Havel", "Freie Hansestadt", "in der Nordheide",
			"M�rkische Schweiz", "an der Altm�hl", "an der Donau", "am Teutoburger Wald", "am Kaiserstuhl", "am Main", "am Neckar", "im Breisgau", "bei M�nchen", "an der Steige", "an der Brenz",
			"an der Fils", "im Kinzigtal", "am Harz", "an der Aisch", "in Unterfranken", "an der Eger", "im Allg�u", "an der Jagst", "unter Teck", "in Bayern", "am Elm", "im Taunus",
			"S�chsische Schweiz", "am See", "an der Isar", "in der Pfalz", "am Lech", "an der Unstrut", "an der Pegnitz", "an der Lahn", "am Inn", "an der Ruhr", "am Kocher", "am Rennweg",
			"am Waldnaab", "am Kulm", "am R�benberge", "an der Orla", "an der Weinstra�e", "bei Coburg", "in Holstein", "in Sachsen", "am Brocken", "vor der Rh�n", "an der Ilm", "am Bodensee",
			"im Vogtland", "an der Fulda", "ob der Tauber", "am Wald", "an der Stra�e", "an der Murr", "an der Enz", "im Kaiserstuhl", "der Stadt", "an der Teck", "in Oberbayern", "auf F�hr",
			"am Schaalsee", "am Harmersbach", "im Wiesental", "am Chiemsee", "am Hockenheimring"

	));

	protected ArrayList<String> flows = new ArrayList<String>(Arrays.asList("stockender", "Richtungsfahrbahn", "Stau", "Vollsperrung", "Sperre", "gesperrt", "Behinderung", "Verkehrsbehinderung"

	));

	protected ArrayList<String> types = new ArrayList<String>(Arrays.asList("Unfall", "Baustelle", "Bergungsarbeiten", "LKW-Unfall", "Tagesbaustelle", "Nachtbaustelle", "Wanderbaustelle",
			"LKw-Bergungsarbeiten", "LKW-Defekt", "Fahrzeug-Defekt", "Br�ckenbauarbeiten"

	));

	protected ArrayList<String> tjList = new ArrayList<String>();

	protected String[] startWithAbzweig = { "Abzweig" };
	String original = "";
	protected ArrayList<String> wordsBefore = new ArrayList<String>(Arrays.asList("Kreuz", "Bad", "Dreieck", "Flughafen", "Gro�", "Westkreuz", "Rastplatz", "Rastst�tte am", "Grenz�bergang", "Hann.",
			"Tunnel"));
	protected ArrayList<String> wordsAfter = new ArrayList<String>(
			Arrays.asList("Br�cke", "Ost", "Nord", "S�d", "West", "Kreuz", "(Harz)", "a. Ammersee ", "Hockenheimring", "Ei", "S�dkreuz", "Mitte"));

	public DLF_Splitter2(ArrayList<String> trafficJamList) {
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
			original = trafficJamList.get(i);
			ArrayList<String> sentences = new ArrayList<String>(Arrays.asList(trafficJam.split("[.?!]")));
			ArrayList<String> sentenceOfTrafficJam = new ArrayList<String>(Arrays.asList(sentences.get(0).split(" ")));

			for (int j = 0; j < sentenceOfTrafficJam.size(); j++) {
				String word = sentenceOfTrafficJam.get(j);
				boolean isDirTo = true;
				if (j == 0) {
					if (word.substring(1, word.length()).matches("[0-9]+")) {
						motorway = word;
						trafficJam = trafficJam.replaceFirst(word + " ", "");
					} else {
						System.out.println("Big Mama Issue. TrafficJam does not start with motorway spelling.");
					}
				}else if(zusaetze.contains(word)){
					
				}
				
//				else if ((j == 1 || j == 2 || j == 3) && isDirTo) {
//					int indexOfRichtung = -1;
//					
//
//					// wordsBefore.contains(trafficJam.sub)
//					if (zusaetze.contains(word)) {
//						System.out.println("Scream");
//						dirFrom = word + " ";
//						trafficJam = trafficJam.replaceFirst(word + " ", "");
//						isDirTo = false;
//					} else {
//						dirFrom = word;
//						trafficJam = trafficJam.replaceFirst(word + " ", "");
//					}
//
//				}

			}

		}
		System.out.println("ENDE");
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

	protected String getWord(ArrayList<String> sentenceOfTrafficJam, int index) {

		String tmp = sentenceOfTrafficJam.get(index);
		sentenceOfTrafficJam.remove(index);
		return tmp;
	}

}
