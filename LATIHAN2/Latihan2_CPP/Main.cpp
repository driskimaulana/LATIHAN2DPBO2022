#include <string>
#include <iostream>
#include "Memory.cpp"

using namespace std;

int main()
{

	// create new Memory Instance
	Memory memo = Memory("2.0 Ghz", "16 GB", "RTX");

	// set all the attribute for its parent
	memo.setBrand("Samsung");
	memo.setIdProduct("A199");
	memo.setPrice(1000000);
	memo.setModel("C");

	// show the class
	memo.ShowClass();

	return 0;
}
