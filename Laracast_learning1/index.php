<?php

require 'vendor/autoload.php';

use Acme\Square;
use Acme\SquareInterface;

class Person {
	public function calculate(SquareInterface $square) {
		$square->area();
		$square->volume();
	}
}

(new Person)->calculate(new Square);
//(new Person)->calculate(new eReaderAdapter(new Kindle));
//(new Person)->calculate(new eReaderAdapter(new Nook));
