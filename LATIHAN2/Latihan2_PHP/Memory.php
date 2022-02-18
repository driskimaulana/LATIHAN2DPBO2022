<?php

include "Hardware.php";
// define class memory which is inherit from Harware and Product class (multiple inheritance)
class Memory extends Hardware
{
	// class attribute
	private $frequency;
	private $memorySize;
	private $supportCuda;

	// constructors
	public function Memory($frequency = 0, $memorySize = 0, $supportCuda = "")
	{
		$this->frequency = $frequency;
		$this->memorySize = $memorySize;
		$this->supportCuda = $supportCuda;
	}

	// getter and setter
	public function setFrequency($frequency)
	{
		$this->frequency = $frequency;
	}

	public function getFrequency()
	{
		return $this->frequency;
	}

	public function setMemorySize($memorySize)
	{
		$this->memorySize = $memorySize;
	}

	public function getMemorySize()
	{
		return $this->memorySize;
	}

	public function setSupportCuda($supportCuda)
	{
		$this->supportCuda = $supportCuda;
	}

	public function getSupportCuda()
	{
		return $this->supportCuda;
	}
}
