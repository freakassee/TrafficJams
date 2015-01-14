package model.string;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Date;
import java.util.List;

import model.SQL.DatabaseTable;

public class DLF_Splitter {

	protected String motorway, dirFrom, dirTo, locStart, locEnd, type, flow, descr, trafficJam;
	protected int length;
	protected Connection c;
	protected ArrayList<String> unsortedTrafficJams = new ArrayList<String>();
	protected ArrayList<String> sortedTrafficJams = new ArrayList<String>();
	protected static String tableName_FROM = "TRAFFIC_OFFEN";
	protected static String tableName_TO = "TRAFFIC_GESCHLOSSEN";
	protected static String dbConnection = "jdbc:postgresql://localhost:5433/trafficJams", user = "trafficAdmin", password = "trafficAdmin";
	protected String r = "Richtung";
	protected String z = "zwischen";
	protected ArrayList<String> zusaetze = new ArrayList<String>(Arrays.asList("Bad", "Sankt", "Schwäbisch", "Ostumfahrung", "Westumfahrung", "Nordumfahrung", "Südumfahrung", "Heilbad", "Hessisch",
			"Hohen", "Horn-Bad", "Königs", "Märkisch", "Preußisch", "Schloß", "Südliches", "Grenzübergang"));
	// http://de.wikipedia.org/wiki/Liste_der_St%C3%A4dte_in_Deutschland
	protected ArrayList<String> notUsedYet = new ArrayList<String>(Arrays.asList("Elbe", "Leine", "Lumda", "Saale", "Westerwald", "Hansestadt", "Altmark", "Harz", "Eder", "Unterweser", "Oder",
			"Rügen", "Bergisch", "Odenwald", "Anhalt", "Donau", "Pfalz", "Lutherstadt", "Jagst", "Lausitz", "Unstrut", "Wohra", "Ostsee", "Westf.", "Schwaben", "Ems", "Bergstraße", "Werre", "Elster",
			"Neckar", "Sieg", "Efze", "Ohm", "Milde", "Kyffhäuser", "Taunus", "Allgäu", "Hunsrück", "Anhalt", "Rheinland", "Baden", "Ostfriesland", "Bodensee", "Mark", "Oldenburg", "Spreewald",
			"Wendland", "Sauerland", "Geiseltal", "Veit", "Dosse", "Wald", "Oldb", "Bode", "Westfalica", "Wetterau", "Holstein", "Aller", "Wümme", "a.d.Laaber", "Hohentwiel", "Eifel", "Uckermark",
			"Rhön", "Niederrhein", "Müritz", "Havel", "Westfalen", "Ei", "Münden/Lutterberg", "Mitte"));

	protected ArrayList<String> notUsedYet2 = new ArrayList<String>(Arrays.asList("am Trifels", "bei Nürnberg", "im Fichtelgebirge", "in der Oberpfalz", "vor der Höhe", "im Harz", "am Deister",
			"an der Saale", "am Taunus", "auf Rügen", "bei Berlin", "a. d. Eigen", "an der Riß", "am Rhein", "an der Rhön", "im Schwarzwald", "an der Havel", "Freie Hansestadt", "in der Nordheide",
			"Märkische Schweiz", "an der Altmühl", "an der Donau", "am Teutoburger Wald", "am Kaiserstuhl", "am Main", "am Neckar", "im Breisgau", "bei München", "an der Steige", "an der Brenz",
			"an der Fils", "im Kinzigtal", "am Harz", "an der Aisch", "in Unterfranken", "an der Eger", "im Allgäu", "an der Jagst", "unter Teck", "in Bayern", "am Elm", "im Taunus",
			"Sächsische Schweiz", "am See", "an der Isar", "in der Pfalz", "am Lech", "an der Unstrut", "an der Pegnitz", "an der Lahn", "am Inn", "an der Ruhr", "am Kocher", "am Rennweg",
			"am Waldnaab", "am Kulm", "am Rübenberge", "an der Orla", "an der Weinstraße", "bei Coburg", "in Holstein", "in Sachsen", "am Brocken", "vor der Rhön", "an der Ilm", "am Bodensee",
			"im Vogtland", "an der Fulda", "ob der Tauber", "am Wald", "an der Straße", "an der Murr", "an der Enz", "im Kaiserstuhl", "der Stadt", "an der Teck", "in Oberbayern", "auf Föhr",
			"am Schaalsee", "am Harmersbach", "im Wiesental", "am Chiemsee", "am Hockenheimring"

	));

	protected ArrayList<String> flows = new ArrayList<String>(Arrays.asList("stockender", "Richtungsfahrbahn", "Stau", "Vollsperrung", "Sperre", "gesperrt", "Behinderung", "Verkehrsbehinderung"

	));

	protected ArrayList<String> types = new ArrayList<String>(Arrays.asList("Unfall", "Baustelle", "Bergungsarbeiten", "LKW-Unfall", "Tagesbaustelle", "Nachtbaustelle", "Wanderbaustelle",
			"LKw-Bergungsarbeiten", "LKW-Defekt", "Fahrzeug-Defekt", "Brückenbauarbeiten"

	));

	protected ArrayList<String> tjList = new ArrayList<String>();

	protected String[] startWithAbzweig = { "Abzweig" };
	String original = "";
	protected ArrayList<String> wordsBefore = new ArrayList<String>(Arrays.asList("Kreuz", "Bad", "Dreieck", "Flughafen", "Groß", "Westkreuz", "Rastplatz", "Raststätte am", "Grenzübergang", "Hann.",
			"Tunnel"));
	protected ArrayList<String> wordsAfter = new ArrayList<String>(
			Arrays.asList("Brücke", "Ost", "Nord", "Süd", "West", "Kreuz", "(Harz)", "a. Ammersee ", "Hockenheimring", "Ei", "Südkreuz", "Mitte"));

	public DLF_Splitter(ArrayList<String> trafficJamList) {
		int counter = 0;
		for (int i = 0; i < trafficJamList.size(); i++) {
			try {
//				if (i == 81) {
//					System.out.println();
//				}
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

				// wenn erstes element leer, entferne es. geschieht wenn in dem
				// ausgangs element mehrere sätze waren

				// nur wenn der satz mit A oder B (für die Autobahnen oder
				// Bundesstraßen) beginnt, sollen folgende operationen
				// durchgeführt werden

				motorway = sentenceOfTrafficJam.get(0);

				sentenceOfTrafficJam.remove(0);

				int indexOfRichtung = sentenceOfTrafficJam.indexOf("Richtung");

				int indexOfZwischen = sentenceOfTrafficJam.indexOf("zwischen");

				if (indexOfRichtung == 1 && indexOfZwischen == 3) {
					isDefaultFinding = true;

				} else {
					unsortedTrafficJams.add(trafficJam);

				}
				if (isDefaultFinding) {

					dirFrom = dirFrom + getWord(sentenceOfTrafficJam, 0);
					getWord(sentenceOfTrafficJam, 0);

					dirTo = dirTo + getWord(sentenceOfTrafficJam, 0);
					getWord(sentenceOfTrafficJam, 0);

					if (wordsBefore.contains(sentenceOfTrafficJam.get(0))) {
						if (sentenceOfTrafficJam.get(0).equals("Flughafen") && sentenceOfTrafficJam.get(1).matches("[0-9]+")) {

						} else {
							locStart = getWord(sentenceOfTrafficJam, 0) + " ";
						}

					}

					locStart = locStart + getWord(sentenceOfTrafficJam, 0);
					if (wordsAfter.contains(sentenceOfTrafficJam.get(0))) {
						locStart = locStart + " " + getWord(sentenceOfTrafficJam, 0);
					}
					// killing 'und'
					getWord(sentenceOfTrafficJam, 0);
//
//					if (i == 76/* 28,57,76,80 */) {
//						System.out.println();
//					}
					boolean flug = false;

					if (wordsBefore.contains(sentenceOfTrafficJam.get(0))) {
						if (sentenceOfTrafficJam.get(0).equals("Tunnel")) {
							locEnd = locEnd + getWord(sentenceOfTrafficJam, 0) + " " + getWord(sentenceOfTrafficJam, 0) + " ";

						} else if (sentenceOfTrafficJam.get(0).equals("Flughafen") && sentenceOfTrafficJam.get(1).matches("[0-9]+")) {

							flug = true;

						} else {
							locEnd = getWord(sentenceOfTrafficJam, 0) + " ";
						}

					}

					locEnd = locEnd + getWord(sentenceOfTrafficJam, 0);
					if (flug) {
						locEnd = locEnd + " " + dirFrom + "/" + dirTo;
					}
					if (wordsAfter.contains(sentenceOfTrafficJam.get(0))) {
						locEnd = locEnd + " " + getWord(sentenceOfTrafficJam, 0);
					}

					sentenceOfTrafficJam.get(0);
				}

				// @TODO
				// needs to be adjusted for "km" in description
				if (isDefaultFinding) {
					if (sentenceOfTrafficJam.contains("km")) {
						try {

							length = Integer.parseInt(sentenceOfTrafficJam.get(sentenceOfTrafficJam.indexOf("km") - 1));
							sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(sentenceOfTrafficJam.indexOf("km") - 1));
							sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(sentenceOfTrafficJam.indexOf("km")));
						} catch (Exception e) {
							length = 0;
						}
					}

					//System.out.println();

					for (int j = 0; j < flows.size(); j++) {
						if (sentenceOfTrafficJam.contains(flows.get(j))) {
							int indexOf = sentenceOfTrafficJam.indexOf(flows.get(j));

							switch (j) {
							case 0:
								flow = sentenceOfTrafficJam.get(indexOf) + " " + sentenceOfTrafficJam.get(indexOf + 1);
								sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(indexOf + 1));
								sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(indexOf));
								break;
							case 1:
								flow = sentenceOfTrafficJam.get(indexOf) + " " + sentenceOfTrafficJam.get(indexOf + 1);
								sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(indexOf + 1));
								sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(indexOf));
								break;
							default:
								flow = sentenceOfTrafficJam.get(indexOf);
								sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(indexOf));
								break;
							}
							break;
						}
					}

					for (int j = 0; j < types.size(); j++) {
						if (sentenceOfTrafficJam.contains(types.get(j))) {
							int indexOf = sentenceOfTrafficJam.indexOf(types.get(j));

							switch (j) {

							default:
								type = sentenceOfTrafficJam.get(indexOf);
								sentenceOfTrafficJam.remove(sentenceOfTrafficJam.get(indexOf));
								break;
							}
							break;
						}
					}

					sortedTrafficJams.add("'" + motorway + "','" + dirFrom + "','" + dirTo + "','" + locStart + "','" + locEnd + "','" + type + "'," + length + ",'" + flow + "'");
					//System.out.println();
					counter++;
				}

			} catch (Exception e) {
				System.out.println(i);
			}
		}
		// System.out.println("ENDE: " + counter + " von " +
		// trafficJamList.size() + " extrahiert.");

		DatabaseTable tableFROM = new DatabaseTable(dbConnection, user, password, tableName_FROM);
		DatabaseTable tableTO = new DatabaseTable(dbConnection, user, password, tableName_TO);
		
		tableFROM.fillTable(sortedTrafficJams);
		tableFROM.transferFinishedRows(tableName_FROM, tableName_TO);
		//http://www.tutorialspoint.com/jdbc/jdbc-delete-records.htm

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
