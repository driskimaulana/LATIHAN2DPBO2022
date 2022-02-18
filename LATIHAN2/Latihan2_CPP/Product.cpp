#include <string>

using namespace std;

class Product
{
private:
	string idProduct;
	int price;

public:
	Product(){

	};
	Product(string idProduct, int pric)
	{
		this->idProduct = idProduct;
		this->price = price;
	};

	// setter and getter
	void setIdProduct(string idProduct)
	{
		this->idProduct = idProduct;
	};

	string getIdProduct()
	{
		return this->idProduct;
	};

	void setPrice(int price)
	{
		this->price = price;
	};

	int getPrice()
	{
		return this->price;
	}
};
