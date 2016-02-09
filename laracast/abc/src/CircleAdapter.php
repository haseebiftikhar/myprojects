<?php namespace Acme;

/**
 *
 */
class CircleAdapter implements SquareInterface {
	private $object;

	function __construct(CircleInterface $object) {
		$this->object = $object;
	}

	public function area() {
		return $this->object->area();
	}

	public function volume() {
		return $this->object->circumference();
	}
}