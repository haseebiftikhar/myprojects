<?php namespace Acme;

class Square implements SquareInterface {

	// public $width;
	// public $height;

	// function __construct($height, $width) {
	// 	$this->height = $height;
	// 	$this->width = $width;
	// }

	public function area() {
		var_dump('Calculate area of Square');

		//return $this->width * $this->height;

	}
	public function volume() {
		var_dump('Calculate Volume of Square');
	}
}
