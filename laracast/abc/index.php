<?php

require 'vendor/autoload.php';

use Acme\Circle;
use Acme\CircleAdapter;
use Acme\Square;
use Acme\SquareInterface;
use Acme\Triangle;
use Acme\TriangleAdapter;

class Person {
	public function calculate(SquareInterface $square) {
		$square->area();
		$square->volume();
		// var_dump($square);
	}
}
// $square = new Square(2, 3);
// $circle = new Circle(2);
(new Person)->calculate(new Square(2, 5));
(new Person)->calculate(new CircleAdapter(new Circle(2)));
(new Person)->calculate(new TriangleAdapter(new Triangle(3, 3, 3, 1.5)));
//(new Person)->calculate(new eReaderAdapter(new Kindle));
//(new Person)->calculate(new eReaderAdapter(new Nook));
