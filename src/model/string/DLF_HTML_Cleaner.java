package model.string;

import java.util.ArrayList;

public class DLF_HTML_Cleaner {

	ArrayList<String> itemList = new ArrayList<String>();
	String searchTermStart = "<p><strong class=\"arial_headline\"><b name=\"highway\">";
	String searchTermEnd = "<p>Alle Angaben ohne Gewähr.</p>";

	public DLF_HTML_Cleaner(String htmlDoc,boolean isLocalhost) {

		if (htmlDoc.contains(searchTermStart)) {
			htmlDoc = htmlDoc.substring(htmlDoc.indexOf(searchTermStart));

			// bis hierhin wird gekürzt
			// solange der htmlDoc <p><strong...> enthält, soll dieser
			// extrahiert und dann ersetzt werden
			int i = 0;
			int indexAnfang = 0;
			int indexEnde;
			while (htmlDoc.startsWith(searchTermStart)) {
				i++;

				String tmp = htmlDoc.substring(1, htmlDoc.length());
				if (tmp.contains(searchTermStart)) {
					indexEnde = indexAnfang + tmp.indexOf(searchTermStart) + 1;
				} else {
					indexEnde = htmlDoc.indexOf(searchTermEnd);
				}
				String value = htmlDoc.substring(indexAnfang, indexEnde);
				itemList.add(value.trim());
				// System.out.println(i + " " + value.trim());
				htmlDoc = htmlDoc.replace(value, "");

			}

			cleanItemList(isLocalhost);

		}
	}

	protected void cleanItemList(boolean isLocalhost) {
		
		for (int i = 0; i < itemList.size(); i++) {
			String item = itemList.get(i);
			String lineBreak;
			if(isLocalhost){
				
				//	für localhost: 
				lineBreak = "<br>";
				
			}else{
				// zunächst den inhalt zwischen den ersten beiden <br> löschen
				// für http://www.deutschlandradio.de/verkehrsmeldungen.438.de.html 
				lineBreak = "<br />";
			}
			

			if (item.contains(lineBreak)) {
				int indexAnfang = item.indexOf(lineBreak);
				int indexEnde;
				String tmpItem = item.substring(indexAnfang + 1, item.length());
				if (tmpItem.contains(lineBreak)) {
					indexEnde = indexAnfang + tmpItem.indexOf(lineBreak) + 1;
				} else {
					System.out.println("Es gibt kein zweites <br> mehr!!!!!!");
					break;
				}
				String value = item.substring(indexAnfang, indexEnde);
				item = item.replaceFirst(value, "");

			}

			// System.out.println(item);

			item = StringManipulation.deleteIntervalString(item, "<strong>", "></strong>");
			item = StringManipulation.deleteIntervalString(item, "<", ">");

			item = StringManipulation.deleteCharacters(item, ",");
			if (item.contains("bitte ")) {
				item = item.replaceFirst("bitte ", "");
			}
			
			if (item.startsWith("Vorsicht auf der ")) {
				item = item.replaceFirst("Vorsicht auf der ", "");
			}
			if (item.startsWith("Auf der ")) {
				item = item.replaceFirst("Auf der ", "");
			}
			if (item.startsWith("Die ")) {
				item = item.replaceFirst("Die ", "");
			}
			if (item.contains("- ")) {
				item = item.replace("- ", "Richtung ");
			}
			if (item.contains("ist zwischen ")) {
				item = item.replace("ist zwischen ", "zwischen ");
			}
			if (item.contains("Zwischen ")) {
				item = item.replace("Zwischen ", "zwischen ");
			}
			if (item.contains("St.")) {
				item = item.replaceFirst("St.", "Sankt");
			}
			if (item.contains("Rhld")) {
				item = item.replaceFirst("Rhld", "Rheinland");
			}
			if (item.contains("und dem")) {
				item = item.replaceFirst("und dem", "und");
			}
			if (item.contains(" wegen ")) {
				item = item.replaceFirst(" wegen ", " ");
			}
			if (item.contains("Bauarbeiten")) {
				item = item.replaceFirst("Bauarbeiten", "Baustelle");
			}
			if (item.contains("LKw-Bergungsarbeiten")) {
				item = item.replaceFirst("LKw-Bergungsarbeiten", "LKW-Bergungsarbeiten");
			}
			if (item.contains("von der ")) {
				item = item.replaceFirst("von der ", "");
			}
			if (item.contains("defekten LKW") || item.contains("defekter LKW")) {
				item = item.replaceFirst("defekten LKW", "LKW-Defekt");
				item = item.replaceFirst("defekter LKW", "LKW-Defekt");
			}
			if (item.contains("defektes Fahrzeug")) {
				item = item.replaceFirst("defektes Fahrzeug", "Fahrzeug-Defekt");
			}
			if (item.contains("(")) {
				item = item.replace("(", "");
			}
			if (item.contains(")")) {
				item = item.replace(")", "");
			}
			if (item.endsWith(".")) {
				item = item.substring(0, item.length() - 1);
			}

			// "LKw-Bergungsarbeiten"

			item.trim();
			// Überprüfung, ob Nachricht mit Autobahn- (z.b. A1) bzw.
			// Bundesstraßenkennung (B51) beginnt
			if (!(item.startsWith("A") || item.startsWith("B"))) {
				System.err.println("Error at Item # " + i + ": " + item);
			}
			itemList.set(i, item);

			// System.out.println(item);
		}

	}

	public ArrayList<String> getItemList() {
		return itemList;
	}

	protected void setItemList(ArrayList<String> itemList) {
		this.itemList = itemList;
	}

}