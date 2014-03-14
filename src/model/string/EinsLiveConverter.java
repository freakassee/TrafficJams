package model.string;

import java.util.ArrayList;

public class EinsLiveConverter {

	protected String arrayLine;
	protected String dir_from, dir_to, loc_start, loc_end, type, flow, descr;
	protected int length;
	private ArrayList<String> sortedStreets;

	public EinsLiveConverter(String[] unsortedStreets) {

		sortedStreets = new ArrayList<String>();
		int indexOfA = 0;

		for (int i = 0; i < unsortedStreets.length; i++) {
			this.arrayLine = unsortedStreets[i];
			if (!arrayLine.equals("")) {
				if ((arrayLine.startsWith("A") && !arrayLine.startsWith("Ac")) || arrayLine.startsWith("B")) {
					indexOfA = i;

				} else {
					if (arrayLine.startsWith("Vorsicht")) {
						String mway = unsortedStreets[indexOfA];
						createSubstring(mway, true);

					}

					dir_from = createSubstring("Richtung", true);
					dir_to = createSubstring("zwischen", true);
					loc_start = createSubstring("und", true);
					if (arrayLine.startsWith("Kreuz")) {
						loc_end = createSubstring(" ", false) + " " + createSubstring(" ", false);

					} else {
						loc_end = createSubstring(" ", false);

					}

					type = "";
					flow = "";
					String stringToTest = createSubstring("km", false);
					if (stringToTest.equals(null)) {
						length = 0;
						createSubstring("-", false);
					} else {
						if (stringToTest.contains(" ")) {
							String arrayLinetmp = arrayLine;
							arrayLine = stringToTest+"km";
							type = createSubstring(" ", false);
							stringToTest= createSubstring("km", false);
							arrayLine = arrayLinetmp.trim();

						}
						length = Integer.parseInt(stringToTest);
						
						flow = createSubstring(" ", false);

					}

					descr = arrayLine;
					//
					String s = unsortedStreets[indexOfA] + ", " + dir_from + ", " + dir_to + ", " + loc_start + ", " + loc_end
							+ ", " + type + ", " + length + ", " + flow+", "+descr;
					//
					sortedStreets.add(s);
				}
			}
		}
	}

	private String createSubstring(String stringToSearchFor, boolean shallBeTrimmed) {
		String tmp = "";
		if (arrayLine.contains(stringToSearchFor)) {
			tmp = arrayLine.substring(0, arrayLine.indexOf(stringToSearchFor)).trim();
			this.arrayLine = arrayLine.substring(arrayLine.indexOf(stringToSearchFor) + stringToSearchFor.length(),
					arrayLine.length());
			if (shallBeTrimmed) {
				this.arrayLine = arrayLine.trim();
			}

		}
		return tmp;

	}

	/**
	 * @return the sortedStreets
	 */
	public ArrayList<String> getSortedStreets() {
		return sortedStreets;
	}

	/**
	 * @param sortedStreets
	 *            the sortedStreets to set
	 */
	public void setSortedStreets(ArrayList<String> sortedStreets) {
		this.sortedStreets = sortedStreets;
	}

}
