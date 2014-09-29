package model.string;

import java.util.ArrayList;

public class DLF_HTML_Cleaner {

	ArrayList<String> itemList = new ArrayList<String>();
	String searchTermStart = "<p><strong class=\"arial_headline\"><b name=\"highway\">";
	String searchTermEnd = "<p>Alle Angaben ohne Gewähr.</p>";

	public DLF_HTML_Cleaner(String htmlDoc) {

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

			cleanItemList();
			
		}
	}

	protected void cleanItemList() {
		for (int i = 0; i < itemList.size(); i++) {
			String item = itemList.get(i);
			// zunächst den inhalt zwischen den ersten beiden <br> löschen
			String lineBreak = "<br>";

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
			if (item.startsWith("Auf der")) {
				item = item.replaceFirst("Auf der", "");
			}
			itemList.set(i, item.trim());

		}
		//System.out.println(itemList);

	}

	public ArrayList<String> getItemList() {
		return itemList;
	}

	protected void setItemList(ArrayList<String> itemList) {
		this.itemList = itemList;
	}

}