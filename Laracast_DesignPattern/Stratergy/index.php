<?php

// encapsulate and make them interchangeable

interface Logger {

	public function log ($data);

}

//Define family of Algo

class LogToFile implements Logger {

	public function log ($data)
	{
		var_dump('Log the data to a file.');
	}
}

class LogToDatabase implements Logger {

	public function log ($data)
	{
		var_dump('Log the data to a database.');
	}

}

class LogToXWebService implements Logger {

	public function log ($data)
	{
		var_dump('Log the data to a Webservice.');
	}

}


class App {
	public function log ($data, Logger $logger=null)
	{
		//$logger= new LogToFile;
		$logger = $logger ?: new LogToFile;
		$logger->log($data);

	}
}

$app = new App;

$app->log('some information', new LogToDatabase);


?>