package model.string;

import java.util.ArrayList;

public class DLF_Converter {

	protected String motorway, dirFrom, dirTo, locStart, locEnd, type, flow,
			descr, trafficJam;
	protected int length;
	
	protected String[] startWithAbzweig = { "Abzweig" };

	public DLF_Converter(ArrayList<String> trafficJamList) {
		for (int i = 0; i < trafficJamList.size(); i++) {

			boolean equalsDirFrom_DirTo = false;
			motorway = "";
			dirFrom = "";
			dirTo = "";
			locStart = "";
			locEnd = "";
			type = "";
			flow = "";
			descr = "";
			trafficJam = trafficJamList.get(i);
// 			System.out.println(trafficJam);
//			motorway = trafficJam.substring(0, trafficJam.indexOf(" "));
//			trafficJam = trafficJam.substring(trafficJam.indexOf(" ")).trim();
			if(i==81){
				System.out.println();
			}
			motorway = shortString(" ");
			
//			System.out.println(motorway);
//			System.out.println(trafficJam.trim());

			if (trafficJam.startsWith("Abzweig")) {
				trafficJam = trafficJam.replaceFirst("Abzweig ", "");
				equalsDirFrom_DirTo = true;
			}
			
			dirFrom = shortString(" ");
			
			
			if(!equalsDirFrom_DirTo){
				if(trafficJam.startsWith("-")){
					trafficJam.replaceFirst("-", "Richtung");
				}else if (trafficJam.startsWith("Richtung")){
					
				}else{
					System.err.println("Bei: "+i +" gab es ein Problem! Es Startet nicht mit \"Richtung\"");
				}
				
				
				
				
				
			}else{
			dirTo = dirFrom;	
			}
//			dirFrom = trafficJam.substring(0, trafficJam.indexOf(" "));
//			trafficJam = trafficJam.substring(trafficJam.indexOf(" ")).trim();

			

		}
	}

	private boolean doesSentenceStartWithWords(String sentence, String[] words) {
		for (int i = 0; i < words.length; i++) {

			if (sentence.startsWith(words[i])) {

			}

		}
		return false;
	}

	protected String shortString(String charSequenceToSearchFor) {
		String extractedString = trafficJam.substring(0, trafficJam.indexOf(" "));
		trafficJam = trafficJam.substring(trafficJam.indexOf(charSequenceToSearchFor)).trim();
		return extractedString;
		
	}

}
