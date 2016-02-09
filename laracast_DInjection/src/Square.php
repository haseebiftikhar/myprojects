<?php

class Square implements ShapeInterface {

	protected $width;
	protected $height;
	protected $length;

	function __construct($height, $width, $length) {
		$this->height = $height;
		$this->width = $width;
		$this->length = $length;
	}

	public function area() {
		var_dump('Calculate area of Square');

		echo $this->width * $this->height;

	}
	public function volume() {
		var_dump('Calculate Volume of Square');
		echo $this->width * $this->height * $this->length;
	}
}
