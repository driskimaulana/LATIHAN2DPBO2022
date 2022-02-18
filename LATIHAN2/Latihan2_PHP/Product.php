<?php

// define product class
class Product
{
	// class attribute
	private $idProduct;
	private $price;

	// empty constructors
	public function Product($idProduct = "", $price = 0)
	{
		$this->idProduct = $idProduct;
		$this->price = $price;
	}

	// getter and setter
	public function setIdProduct($idProduct)
	{
		$this->idProduct = $idProduct;
	}

	public function getIdProduct()
	{
		return $this->idProduct;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}
}
