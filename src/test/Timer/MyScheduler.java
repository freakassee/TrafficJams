package test.Timer;

import java.net.URL;
import java.util.Timer;

import model.parser.ReadDocFromURL;
import model.string.DLF_HTML_Cleaner;
import model.string.DLF_Splitter;

public class MyScheduler {
	public static void main(String[] args) {
		try {
			URL dlf_urlONLINE = new URL("http://www.deutschlandradio.de/verkehrsmeldungen.438.de.html");
			ReadDocFromURL dlf_docONLINE = new ReadDocFromURL(dlf_urlONLINE);
			DLF_HTML_Cleaner dlf_parserONLINE = new DLF_HTML_Cleaner(dlf_docONLINE.getHtmlDoc(), false);
			DLF_Splitter dlf_splitterONLINE = new DLF_Splitter(dlf_parserONLINE.getItemList());
			dlf_splitterONLINE.getClass();
			Timer timer = new Timer();
			MyTimer myTask = new MyTimer(timer);
			// it means after 1 second.
			int firstSart = 1000;
			// after which the task will repeat; meaning 10 minutes
			int period = 600000;

			// the time specified in millisecond.
			timer.schedule(myTask, firstSart, period);
		} catch (Exception e) {

		}

	}
}
