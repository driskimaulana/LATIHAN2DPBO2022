public class Main {

	public static void main(String[] args) {
		// create Memory instance
		Memory memo = new Memory("4.0 Ghz", "8 GB", "RTX");

		// set attribute from Memory class parent
		memo.setBrand("Samsung");
		memo.setIdProduct("A1999");
		memo.setPrice(200000);
		memo.setModel("A");

		// show inside class
		memo.ShowClass();

	}

}
