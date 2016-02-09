<?php

class AdapterCircle implements ShapeInterface {
	private $object;

	function __construct(ShapeInterface $object) {
		$this->object = $object;
	}

	public function area() {
		return $this->object->area();
	}

	public function volume() {
		return $this->object->circumference();
	}
}
