<?php

function myCustomErrorHandler(int $errNo, string $errMsg, string $file, int $line) {
  echo "$errNo, ".basename($file).", $line, $errMsg".PHP_EOL;
}
set_error_handler('myCustomErrorHandler');

require('../phpMQTT.php');

$server = 'localhost';            // change if necessary
$port = 1883;                     // change if necessary
$username = 'username';           // set your username
$password = 'username';           // set your password
$client_id = 'phpMQTT-publisher'; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
	$success = $mqtt->publish('bluerhinos/phpMQTT/examples/publishtest', 'Hello World! at ' . date('r'), 0, false);
	$mqtt->close();
} else {
    echo "Time out!\n";
}
