<?php

interface Subject {
	public function attach($observable);
	public function detach($observer);
	public function notify();
}

//Subscriber Listner
interface Observer{
	public function handle();
}

class Login implements Subject {

	protected $observers = [];

	public function attach($observable)
	{
		if (is_array($observable))
		{
			foreach ($observable as $observer) 
			{
				if (! $observer instanceof Observer)
					throw new Exception("Error Processing Request", 1);
					
				$this->attach($observer);
			}
			return;
		}
		$this->observers[] = $observer;

		return $this;
	}

	public function fire()
	{
		$this->notify();
	}
	
	public function detach($observer){
		unset($this->observers[$index]);
	}
	
	public function notify(){

		foreach ($this->observers as $observer) {
			$observer->handle();
		}
	}
}

class LogHandler implements Observer{
	public function handle()
	{
		var_dump('Somthing important.');
	}
}

class EmailNotifier implements Observer{
	public function handle()
	{
		var_dump('Fire off an email.');
	}
}

$login = new Login;

$login->attach([
	new LogHandler,
	new EmailNotifier
	]);

?>