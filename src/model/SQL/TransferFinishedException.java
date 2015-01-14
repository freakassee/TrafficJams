package model.SQL;


public class TransferFinishedException extends Exception {

	public TransferFinishedException() {
	}

	// Constructor that accepts a message
	public TransferFinishedException(String message) {
		super(message);
	}
}
