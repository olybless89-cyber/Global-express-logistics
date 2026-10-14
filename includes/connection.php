<?php
ob_start();
session_start();
error_reporting(E_ALL);

//conneciton Variables//
define('DBHost', 'localhost');
define('DBUser', 'root');
define('DBPassword', '');
define('DBName', 'linkedin');

$con = new MySQLi(DBHost,DBUser,DBPassword,DBName);

	 if ($con->connect_errno) {
			 die("ERROR : -> ".$con->connect_error);

 }


?>
