<?php namespace Acme;

class VeggieSub extends Sub {
	

	

	public function addPrimaryToppings()
	{
		var_dump('Adding down Veggies.');
		return $this;
	}

	
}

?>