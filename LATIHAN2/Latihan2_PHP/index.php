<?php
// import class
include "Memory.php";

// create new Memory class instance
$memo = new Memory("6.0 Ghz", "64 GB", "RTX");

// set attribute parent class
$memo->setIdProduct("A199");
$memo->setBrand("Samsung");
$memo->setModel("C");
$memo->setPrice(1000000);

// show the class
echo "Id Product	: " . $memo->getIdProduct() . "<br>";
echo "Price			: " . $memo->getPrice() . "<br>";
echo "Brand			: " . $memo->getBrand() . "<br>";
echo "Model			: " . $memo->getModel() . "<br>";
echo "Frequency Memory : " . $memo->getFrequency() . "<br>";
echo "Memory Size	: " . $memo->getMemorySize() . "<br>";
echo "Support Cuda	: " . $memo->getSupportCuda() . "<br>";
