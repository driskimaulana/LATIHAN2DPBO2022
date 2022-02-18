#include <string>
#include <iostream>
#include "Hardware.cpp"

using namespace std;

class Memory : public Hardware
{
private:
	/* data */
	string frequency;
	string memorySize;
	string supportCuda;

public:
	Memory(/* args */){};
	Memory(string frequency, string memorySize, string supportCuda)
	{
		this->frequency = frequency;
		this->memorySize = memorySize;
		this->supportCuda = supportCuda;
	}

	// getter and setter
	void setFrequency(int frequency)
	{
		this->frequency = frequency;
	}

	string getFrequency()
	{
		return this->frequency;
	}

	void setMemorySize(int memorySize)
	{
		this->memorySize = memorySize;
	}

	string getMemorySize()
	{
		return this->memorySize;
	}

	void setSupportCuda(string supportCuda)
	{
		this->supportCuda = supportCuda;
	}

	string getSupportCuda()
	{
		return this->supportCuda;
	}

	// method for print the class instance
	void ShowClass()
	{
		// show the instance
		cout << "Id Product	: " << this->getIdProduct() << endl;
		cout << "Price		: " << this->getPrice() << endl;
		cout << "Brand		: " << this->getBrand() << endl;
		cout << "Model		: " << this->getModel() << endl;
		cout << "Frequency Memory: " << this->getFrequency() << endl;
		cout << "Memory	Size	: " << this->getMemorySize() << endl;
		cout << "Support Cuda	: " << this->getSupportCuda() << endl;
	}
};
