package model;

import java.util.ArrayList;

public class MotorwayObject {

	private String motorway;
	private String dir_from;
	private String dir_to;
	private String loc_start;
	private String loc_end;
	private String type;
	private int length;
	private String flow;
	private ArrayList<MotorwayObject> objects;

	/**
	 * @return the motorway
	 */

	public MotorwayObject(String motorway, String dir_from, String dir_to, String loc_start, String loc_end, String type,
			int length, String flow) {
		super();
		this.motorway = motorway;
		this.dir_from = dir_from;
		this.dir_to = dir_to;
		this.loc_start = loc_start;
		this.loc_end = loc_end;
		this.type = type;
		this.length = length;
		this.flow = flow;
	}

//	public MotorwayObject(String[]] inputString) {
//		createObjectFromString(inputString);
//	}
//
//	private void createObjectFromString(String[] inputString) {
//		
//	}

	public String getMotorway() {
		return motorway;
	}

	/**
	 * @param motorway
	 *            the motorway to set
	 */
	public void setMotorway(String motorway) {
		this.motorway = motorway;
	}

	/**
	 * @return the dir_from
	 */
	public String getDir_from() {
		return dir_from;
	}

	/**
	 * @param dir_from
	 *            the dir_from to set
	 */
	public void setDir_from(String dir_from) {
		this.dir_from = dir_from;
	}

	/**
	 * @return the dir_to
	 */
	public String getDir_to() {
		return dir_to;
	}

	/**
	 * @param dir_to
	 *            the dir_to to set
	 */
	public void setDir_to(String dir_to) {
		this.dir_to = dir_to;
	}

	/**
	 * @return the loc_start
	 */
	public String getLoc_start() {
		return loc_start;
	}

	/**
	 * @param loc_start
	 *            the loc_start to set
	 */
	public void setLoc_start(String loc_start) {
		this.loc_start = loc_start;
	}

	/**
	 * @return the loc_end
	 */
	public String getLoc_end() {
		return loc_end;
	}

	/**
	 * @param loc_end
	 *            the loc_end to set
	 */
	public void setLoc_end(String loc_end) {
		this.loc_end = loc_end;
	}

	/**
	 * @return the type
	 */
	public String getType() {
		return type;
	}

	/**
	 * @param type
	 *            the type to set
	 */
	public void setType(String type) {
		this.type = type;
	}

	/**
	 * @return the length
	 */
	public int getLength() {
		return length;
	}

	/**
	 * @param length
	 *            the length to set
	 */
	public void setLength(int length) {
		this.length = length;
	}

	/**
	 * @return the flow
	 */
	public String getFlow() {
		return flow;
	}

	/**
	 * @param flow
	 *            the flow to set
	 */
	public void setFlow(String flow) {
		this.flow = flow;
	}

}
