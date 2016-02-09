<?php

require 'vendor/autoload.php';

use classmap\Square;
//use classmap\AreaCalculator;
use classmap\ShapeInterface;
use classmap\Circle;
use classmap\Triangle;

class AreaCalculator 
{


	public function calculate($shapes)
	{
		
		foreach ($shapes as $shape) 
		{
			$area=$shape->area();
		}

		return array_sum($area);

	}
}

(new AreaCalculator)->calculate(new ShapeInterface(new Square,2,3));