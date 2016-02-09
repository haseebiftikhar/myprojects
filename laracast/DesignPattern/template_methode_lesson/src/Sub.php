<?php namespace Acme;

abstract class Sub {

	public function make()
	{
		return $this
			->layBread()
			->addLettuce()
			->addPrimaryToppings()
			->addSauces();
	}

	protected function layBread()
	{
		var_dump('Laying down Bread.');
		return $this;
	}

	protected function addLettuce()
	{
		var_dump('Adding lattuce');
		return $this;
	}

	protected function addSauces()
	{
		var_dump('Adding some sauces.');
		return $this;
	}

	protected abstract function addPrimaryToppings();
}
