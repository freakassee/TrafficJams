package model.string;

public class StringShorter {

	protected String shortendString;
	protected String START_TAG;
	protected String END_TAG;
	protected String htmlDoc;
	protected String meldungTag;
	protected String meldungEndTag;

	
	public StringShorter(String htmlDoc, String START_TAG, String END_TAG) {
		this.htmlDoc=htmlDoc;
		this.START_TAG=START_TAG;
		this.END_TAG=END_TAG;
		
		if (htmlDoc.contains(START_TAG) && htmlDoc.contains(END_TAG)) {
			int beginIndex = htmlDoc.indexOf(START_TAG);
			int endIndex = htmlDoc.indexOf(END_TAG);
			this.shortendString = htmlDoc.substring(beginIndex, endIndex);
		}
	}
	public String getNextTags(String startTag,String endTag){
		StringShorter tmp = new StringShorter(htmlDoc,"meldung-","<li class=\"staukarteLink inv noprint\">");
		System.out.println(tmp);
		return "";
	}
	
	/**
	 * @return the shortendString
	 */
	public String getShortendString() {
		return shortendString;
	}

	/**
	 * @param shortendString
	 *            the shortendString to set
	 */
	public void setShortendString(String shortendString) {
		this.shortendString = shortendString;
	}
	/**
	 * @return the START_TAG
	 */
	public String getStartTag() {
		return START_TAG;
	}

	/**
	 * @param START_TAG the START_TAG to set
	 */
	public void setStartTag(String START_TAG) {
		this.START_TAG = START_TAG;
	}

	/**
	 * @return the END_TAG
	 */
	public String getEndTag() {
		return END_TAG;
	}

	/**
	 * @param END_TAG
	 *            the END_TAG to set
	 */
	public void setEndTag(String END_TAG) {
		this.END_TAG = END_TAG;
	}

}
