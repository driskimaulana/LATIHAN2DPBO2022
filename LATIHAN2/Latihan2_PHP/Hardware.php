<?php

include "Product.php";

// define class hardware inherit from product
class Hardware extends Product
{
	// class attribute
	private $model;
	private $brand;

	// constructors
	public function Hardware($model = "", $brand = "")
	{
		$this->model = $model;
		$this->brand = $brand;
	}

	// getter and setter
	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}
}
