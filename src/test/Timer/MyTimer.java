package test.Timer;

import java.util.Timer;
import java.util.TimerTask;

import main.DeutschlandFunk;



public class MyTimer extends TimerTask {
	protected Timer timer;
	protected int count = 0;
	protected DeutschlandFunk dlf = new DeutschlandFunk();
	
	public MyTimer() {
	}

	public MyTimer(Timer timer) {
		this.timer = timer;
	}

	public void toDo() {
		System.out.println(" Count-> " + (count++) + " : Hello World ! This is java scheduler ");
		dlf.run(true);
	}

	@Override
	public void run() {
		toDo();
//		if (count > 10) {
//			// this is the condition when you want to stop the task.
//			timer.cancel();
//		}
	}
}