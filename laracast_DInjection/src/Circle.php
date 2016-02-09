<?php
class Circle implements ShapeInterface {
	protected $radius;

	function __construct($radius) {

		$this->radius = $radius;
	}

	public function area() {
		var_dump('Calculate area of Circle');

		echo $this->radius * $this->radius * pi();

	}

	public function volume() {
		var_dump('Circle do not have volume');
	}

	public function circumference() {
		var_dump('Calculate circumference of Circle');
		echo $this->radius * pi() * 2;
	}
}