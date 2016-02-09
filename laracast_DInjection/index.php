<?php

require 'init.php';

/*Square (x,x,x)*/
/*Circle (x)*/
/*Triangle (x,x,x,x)*/

class Person {
	public function calculate(ShapeInterface $shape) {
		$shape->area();
		$shape->volume();
	}
}
//$square = new Square(2, 5, 5);
// $square->volume();
// $circle = new Circle(2);

(new Person)->calculate(new Square(2, 5, 5));
(new Person)->calculate(new AdapterCircle(new Circle(2)));
(new Person)->calculate(new AdapterTriangle(new Triangle(2, 2, 2, 2)));
