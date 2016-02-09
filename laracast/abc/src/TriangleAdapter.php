<?php namespace Acme;

/**
 *
 */
class TriangleAdapter implements SquareInterface {
	private $object;

	function __construct(TriangleInterface $object) {
		$this->object = $object;
	}

	public function area() {
		return $this->object->area();
	}

	public function volume() {
		return $this->object->Perimeter();
	}
}