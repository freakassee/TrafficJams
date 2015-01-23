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
			
			//LOCALHOST
			
//			URL dlf_urlLOCALHOST = new URL("http://localhost:8081/examples/dlf.htm");
//// 			URL dlf_urlLOCALHOST = new URL("http://localhost:8081/examples/dlf4.htm");
////			URL dlf_urlLOCALHOST = new URL("http://localhost:8081/examples/dlf3.htm");
////			URL dlf_urlLOCALHOST = new URL("http://localhost:8081/examples/dlf2.htm");
////			URL dlf_urlLOCALHOST = new URL("http://localhost:8081/examples/dlf_empty.htm");
//						
//						
//			
//			ReadDocFromURL dlf_docLOCALHOST = new ReadDocFromURL(dlf_urlLOCALHOST);
//			DLF_HTML_Cleaner dlf_parserLOCALHOST = new DLF_HTML_Cleaner(dlf_docLOCALHOST.getHtmlDoc(),true);
//			DLF_Splitter dlf_splitterLOCALHOST = new DLF_Splitter(dlf_parserLOCALHOST.getItemList());
//			dlf_splitterLOCALHOST.getClass();
			
			
			
			
			
//			ONLINE
			
			URL dlf_urlONLINE = new URL("http://www.deutschlandradio.de/verkehrsmeldungen.438.de.html");
			ReadDocFromURL dlf_docONLINE = new ReadDocFromURL(dlf_urlONLINE);
			DLF_HTML_Cleaner dlf_parserONLINE = new DLF_HTML_Cleaner(dlf_docONLINE.getHtmlDoc(),false);
			DLF_Splitter dlf_splitterONLINE = new DLF_Splitter(dlf_parserONLINE.getItemList());
			dlf_splitterONLINE.getClass();
			

			
			
			
			
			
		} catch (Exception e) {
			System.out.println(e);
			
		}
	}
}
