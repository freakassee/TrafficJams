package model.parser;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.URL;
import java.net.URLConnection;
import java.util.ArrayList;

public class ReadDocFromURL {
	private ArrayList<String> htmlDocument = new ArrayList<String>();
	private String htmlDoc = "";

	/**
	 * @return the htmlDoc
	 */
	public String getHtmlDoc() {
		return htmlDoc;
	}

	/**
	 * @param htmlDoc the htmlDoc to set
	 */
	public void setHtmlDoc(String htmlDoc) {
		this.htmlDoc = htmlDoc;
	}

	public ReadDocFromURL(URL connectionURL) throws Exception {
		startConnection(connectionURL);
	}

	private void startConnection(URL connectionURL) throws IOException {
		URLConnection spoof;
		spoof = connectionURL.openConnection();
		BufferedReader in = new BufferedReader(new InputStreamReader(spoof.getInputStream(),"UTF-8"));
		String strLine = "";
		while ((strLine = in.readLine()) != null) {
			if (!strLine.trim().equals("")) {
				htmlDoc = htmlDoc + strLine.trim() + "\n";
				this.htmlDocument.add(strLine.trim());
			}
		}
	}

	/**
	 * @return the htmlDocument
	 */
	public ArrayList<String> getHtmlDocument() {
		return htmlDocument;
	}

	/**
	 * @param htmlDocument the htmlDocument to set
	 */
	public void setHtmlDocument(ArrayList<String> htmlDocument) {
		this.htmlDocument = htmlDocument;
	}

	public String toString() {
		for (int i = 0; i < htmlDocument.size(); i++) {
			System.out.println(htmlDocument.get(i));
		}

		return "";

	}

}