package test.html;

import java.net.URL;
import java.util.ArrayList;

import model.parser.ReadDocFromURL;
import model.string.DLF_HTML_Cleaner;
import model.string.WDR_StringShorter;

public class DeutschlandFunk {
	public static void main(String[] args) {
		try {
			URL dlf_url = new URL("http://localhost:8080/examples/dlf.htm");
		
			ReadDocFromURL dlf_doc = new ReadDocFromURL(dlf_url);
			

			ArrayList<String> test = dlf_doc.getHtmlDocument();

			DLF_HTML_Cleaner dlf_parser = new DLF_HTML_Cleaner(dlf_doc.getHtmlDoc());
			DLF_Converter dlf_converter = new DLF_Converter(dlf_parser.getItemList());
		} catch (Exception e) {
			System.out.println(e);
		}
	}
}