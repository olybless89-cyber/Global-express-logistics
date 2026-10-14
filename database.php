<?php
// Database connection config (reads Railway MySQL variables, falls back to local defaults)
$dbHost = getenv('MYSQLHOST') ?: 'localhost';
$dbPort = (int)(getenv('MYSQLPORT') ?: 3306);
$dbUser = getenv('MYSQLUSER') ?: 'root';
$dbPass = getenv('MYSQLPASSWORD') ?: '';
$dbName = getenv('MYSQLDATABASE') ?: 'dhlexpresslogistics';

// Site settings
$site_title = 'DHL EXPRESS LOGISTICS';
$site_url   = getenv('SITE_URL') ?: 'https://dhlexpresslogistics.com';
$site_email = getenv('SITE_EMAIL') ?: 'support@dhlexpresslogistics.com';

mysqli_report(MYSQLI_REPORT_OFF);
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName, $dbPort) or die('MySQL connect failed. ' . mysqli_connect_error());
mysqli_query($dbConn, "SET SESSION sql_mode = ''");

if (!defined('MYSQL_NUM'))   define('MYSQL_NUM', MYSQLI_NUM);
if (!defined('MYSQL_ASSOC')) define('MYSQL_ASSOC', MYSQLI_ASSOC);
if (!defined('MYSQL_BOTH'))  define('MYSQL_BOTH', MYSQLI_BOTH);

function dbQuery($sql)
{
	global $dbConn;
	$result = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQLI_NUM)
{
	return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result)
{
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	global $dbConn;
	return mysqli_select_db($dbConn, $dbName);
}

function dbInsertId()
{
	global $dbConn;
	return mysqli_insert_id($dbConn);
}

function dbEscape($value)
{
	global $dbConn;
	return mysqli_real_escape_string($dbConn, $value);
}
?>
