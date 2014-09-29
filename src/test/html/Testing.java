package test.html;

import java.net.URL;
import java.util.ArrayList;

import model.parser.ReadDocFromURL;
import model.string.WDR_StringShorter;

public class Testing {
	public static void main(String[] args) {
		try {
			URL wrdURL = new URL("http://www.wdr.de/verkehrslage/nordrhein-westfalen");
			ReadDocFromURL wdr = new ReadDocFromURL(wrdURL);
			// ReadDocFromURL einslive = new ReadDocFromURL(einsLive);

			ArrayList<String> test = wdr.getHtmlDocument();

			WDR_StringShorter wdrC = new WDR_StringShorter(wdr.getHtmlDoc());
		} catch (Exception e) {
			System.out.println(e);
		}
	}
}
