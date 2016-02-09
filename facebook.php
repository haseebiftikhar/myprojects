<?php

/**
 * @author lolkittens
 * @copyright 2014
 */
// An example of using php-webdriver.

include('c:/wamp/www/selenium/PHPWebDriver/__init__.php');
ini_set('max_execution_time', 300000000);

//$this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', DesiredCapabilities::firefox());
// start Firefox with 5 second timeout

$host = 'http://localhost:4444/wd/hub'; // this is the default
$capabilities = DesiredCapabilities::firefox();
$driver = RemoteWebDriver::create($host, $capabilities, 300000);

// navigate to 'http://docs.seleniumhq.org/'
$driver->get('https://www.facebook.com/');
$username = $driver->findElement(
  WebDriverBy::id('email')
);
$username->sendKeys('test@gmail.com');
$password = $driver->findElement(
  WebDriverBy::id('pass')
);
$password->sendKeys('test');
$enterin = $driver->findElement(
  WebDriverBy::id('u_0_l')
);
$enterin->submit();
sleep(60);
//$driver->close();
$driver->quit();



?>