<?php namespace classmap;

/**
* 
*/
class Triangle implements Shape
{
	public $length;
	
	function __construct($length)
	{
		$this->length= $length;	
	}

	public function area()
	{
		return $this->length * 3;
	}

}