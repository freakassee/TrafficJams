package model.string;

import java.util.ArrayList;

public class WDR_StringShorter extends StringShorter{
	
	ArrayList<String> test= new ArrayList<String>();
	
	
	public WDR_StringShorter(String htmlDoc){	
		super(htmlDoc,"<div id=\"strassenliste\">","<!-- #strassenliste -->");
		meldungTag = "<td id=\"meldung-";
		meldungEndTag= "<li class=\"staukarteLink inv noprint\">";
					
		while (shortendString.contains(meldungTag)&&shortendString.contains(meldungEndTag)) {
		
			getNextTags();		
			}
	}
	
	public void getNextTags(){
		StringShorter tmp = new StringShorter(shortendString,meldungTag,meldungEndTag);
		String subString = shortendString.substring(tmp.htmlDoc.indexOf(meldungEndTag),tmp.htmlDoc.length());
		setShortendString(subString);
		test.add(tmp.shortendString);
		System.out.println(tmp.shortendString);
		
	}

}

//int beginIndex = htmlDoc.indexOf("<td id=\"meldung-");
//this.shortendString = htmlDoc.substring(beginIndex);
//x = shortendString.split("<td id=\"meldung-");


//System.out.println(shortendString);
