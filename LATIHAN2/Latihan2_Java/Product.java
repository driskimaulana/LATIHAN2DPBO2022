public class Product {

	private int price;
	private String idProduct;

	// empty constuctors
	Product() {

	}

	// constructors
	Product(int price, String idProduct) {
		this.price = price;
		this.idProduct = idProduct;
	}

	// getter and setter
	public void setPrice(int price) {
		this.price = price;
	}

	public int getPrice() {
		return price;
	}

	public void setIdProduct(String idProduct) {
		this.idProduct = idProduct;
	}

	public String getIdProduct() {
		return idProduct;
	}

}
