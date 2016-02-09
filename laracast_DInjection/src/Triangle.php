<?php

class Triangle implements ShapeInterface {
	protected $side1;
	protected $side2;
	protected $side3;
	protected $height;

	function __construct($height, $side1, $side2, $side3) {
		$this->height = $height;
		$this->side1 = $side1;
		$this->side2 = $side2;
		$this->side3 = $side3;
	}

	public function area() {
		var_dump('Calculate area of Triangle');

		echo $this->side1 * $this->height * 0.5; //1/2*Base*height
	}

	public function volume() {
		var_dump('Triangle do not have volume');
	}

	public function Perimeter() {
		var_dump('Calculate Perimeter of Triangle');

		echo $this->side1 * $this->side2 * $this->side3;
	}
}
