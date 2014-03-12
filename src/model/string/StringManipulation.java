package model.string;

import java.util.ArrayList;

public class StringManipulation {
	
	
	public static String deleteIntervalString(String inputString, String intervalStartChar, String intervalEndChar) {
		int open = 0, closed = 0, end = inputString.length();
		if (!inputString.contains(intervalStartChar) && !inputString.contains(intervalEndChar)) {
			inputString = replaceCharaters(inputString, ",,,",";");
			inputString = deleteCharacters(deleteCharacters(inputString, ",,"), "  ");

			return inputString;
		}
		String temp = "";
		if (inputString.contains(intervalStartChar)) {
			open = inputString.indexOf(intervalStartChar);
		}
		if (inputString.contains(intervalEndChar)) {
			closed = inputString.indexOf(intervalEndChar);
		}
		temp = inputString.substring(0, open) + "," + inputString.substring(closed + 1, end);

		return deleteIntervalString(temp,intervalStartChar,intervalEndChar);
	}

	public static String deleteCharacters(String inputString, String charactersToDelete) {
		String temp = "";
		
		if (inputString.contains(charactersToDelete)) {
			int index = inputString.indexOf(charactersToDelete);
			temp = inputString.substring(0, index) + inputString.substring(index + 1, inputString.length());
			return deleteCharacters(temp, charactersToDelete);
		}

		return inputString;

	}
	
	public static String replaceCharaters(String inputString, String charactersToReplace, String replaceChar){
		String temp = "";
		
		if (inputString.contains(charactersToReplace)) {
			int index = inputString.indexOf(charactersToReplace);
			temp = inputString.substring(0, index) + inputString.substring(index + 1, inputString.length());
			return replaceCharaters(temp, charactersToReplace, replaceChar);
		}
		return temp;
		
	}
}