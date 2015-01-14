package main;

import java.net.URL;
import java.util.ArrayList;

import model.parser.ReadDocFromURL;
import model.string.DLF_HTML_Cleaner;
import model.string.DLF_Splitter;
import model.string.DLF_Splitter2;

public class DeutschlandFunk {
	public static void main(String[] args) {
		try {
			// URL dlf_url = new URL("http://localhost:8081/examples/dlf4.htm");
			// URL dlf_url = new URL("http://localhost:8081/examples/dlf3.htm");
			URL dlf_url = new URL("http://localhost:8081/examples/dlf2.htm");
			//URL dlf_url = new URL("http://www.deutschlandradio.de/verkehrsmeldungen.438.de.html");
			
			// URL dlf_url = new URL("http://localhost:8081/examples/dlf.htm");
			ReadDocFromURL dlf_doc = new ReadDocFromURL(dlf_url);

			ArrayList<String> test = dlf_doc.getHtmlDocument();

			DLF_HTML_Cleaner dlf_parser = new DLF_HTML_Cleaner(dlf_doc.getHtmlDoc());
			// DLF_Converter dlf_converter = new
			// DLF_Converter(dlf_parser.getItemList());
			//DLF_Splitter2 dlf_splitter = new DLF_Splitter2(dlf_parser.getItemList());
			DLF_Splitter dlf_splitter1 = new DLF_Splitter(dlf_parser.getItemList());
			dlf_splitter1.getClass();
		} catch (Exception e) {
			System.out.println(e);
			
		}
	}
}
