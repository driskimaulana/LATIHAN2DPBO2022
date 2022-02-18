public class Memory extends Hardware {

	private String frequency;
	private String memorySize;
	private String supportsCuda;

	// empty constructors
	Memory() {

	}

	// constructors
	Memory(String frequency, String memorySize, String supportsCuda) {
		this.frequency = frequency;
		this.memorySize = memorySize;
		this.supportsCuda = supportsCuda;
	}

	// getter and setter
	public void setFrequency(String frequency) {
		this.frequency = frequency;
	}

	public String getFrequency() {
		return frequency;
	}

	public void setMemorySize(String memorySize) {
		this.memorySize = memorySize;
	}

	public String getMemorySize() {
		return memorySize;
	}

	public void setSupportsCuda(String supportsCuda) {
		this.supportsCuda = supportsCuda;
	}

	public String getSupportsCuda() {
		return supportsCuda;
	}

	// method for showing inside class
	public void ShowClass() {
		System.out.println("Id Product	 : " + this.getIdProduct());
		System.out.println("Price	  	 : " + this.getPrice());
		System.out.println("Brand	 	 : " + this.getBrand());
		System.out.println("Model	 	 : " + this.getModel());
		System.out.println("Frequency Memory : " + this.getFrequency());
		System.out.println("Memory Size	 : " + this.getMemorySize());
		System.out.println("Support Cuda	 : " + this.getSupportsCuda());
	}

}
