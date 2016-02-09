<?php namespace Acme;

class TurkeySub extends Sub {
	


	public function addPrimaryToppings()
	{
		var_dump('Adding down turkey.');
		return $this;
	}

}

?>