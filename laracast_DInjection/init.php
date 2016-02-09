<?php

/**
 *  A U T O L O A D I N G
 */

spl_autoload_register(function ($class) {
	require_once "src/" . $class . ".php";
});