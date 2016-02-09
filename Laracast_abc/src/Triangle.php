<?php
namespace Acme;

class Triangle implements TriangleInterface {
	public $side1;
	public $side2;
	public $side3;
	public $height;

	function __construct($height, $side1, $side2, $side3) {
		$this->height = $height;
		$this->side1 = $side1;
		$this->side2 = $side2;
		$this->side3 = $side3;
	}

	public function area() {
		var_dump('Calculate area of Triangle');

		echo $this->side1 * $this->height * 0.5;
	}
	public function Perimeter() {
		var_dump('Calculate Perimeter of Triangle');

		echo $this->side1 * $this->side2 * $this->side3;
	}
}
