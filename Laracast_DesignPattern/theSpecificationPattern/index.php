<?php

class CustomerIsGold {
	public function isSatisfiedBy (Customer $customer)
	{
		$customer->type == 'gold';
	}
}

class Customer {
	public function isGold()
	{
		return $this->type == 'gold';
	}
}

?>