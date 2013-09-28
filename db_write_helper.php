<?php
//echo "db write helper";

include_once 'db_helper.php';

function AddNews($date, $title, $filename, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "INSERT INTO `News` (`EventDate`, `Title`, `Link`)
VALUES ('".$date."', '".$title."', '".$filename."');";

	mysql_query($query, $connection) or die("Error on executing the query");

	if ($close_connection) {
		CloseConnection();
	}
};

function AddVisnyk($title, $filename, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "INSERT INTO `Documents` (`Title`, `Name`, `Type` ) 
VALUES ('".$title."​', '".$filename."', 2);";

	mysql_query($query, $connection) or die("Error on executing the query");

	if ($close_connection) {
		CloseConnection();
	}
};

function AddSubscription($email, $guid, $close_connection) {
	global $connection;
	OpenConnection();
	
	$query = "call SaveSubscription('".$email."','".$guid."');";

	mysql_query($query, $connection) or die("Error on executing the query");

	if ($close_connection) {
		CloseConnection();
	}
};

function ActivateSubscription($guid, $close_connection) {
	global $connection;
	OpenConnection();
	//echo $guid;
	$query = "call ActivateSubscription('".$guid."');";

	mysql_query($query, $connection) or die("Error on executing the query");

	if ($close_connection) {
		CloseConnection();
	}
};

?>
