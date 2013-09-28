<?php
//echo "db read helper";

include_once 'db_helper.php';

function ReadNews($format, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `EventDate`, `Title`, `Link` 
FROM `News`
ORDER BY `EventDate` DESC, `AddDate` DESC";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	while($rows = mysql_fetch_array($result))
	{
		$date = strtotime($rows['EventDate']);
		$full_link = "/News/".date('y', $date)."/".date('m', $date)."/".date('d', $date)."/".$rows['Link'];
		echo sprintf($format, date('d-m-y', $date), $rows['Title'], $full_link);
	}
	if ($close_connection) {
		CloseConnection();
	}
};

function ReadCongresses($format, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `Title`, `Text` 
FROM `History`
WHERE `Type` = 2
ORDER BY `AddDate` DESC, `Id` DESC";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	while($rows = mysql_fetch_array($result))
	{
		echo sprintf($format, $rows['Title'], nl2br($rows['Text']));
	}
	if ($close_connection) {
		CloseConnection();
	}
};

function ReadHistory($format, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `Title`, `Text` 
FROM `History`
WHERE `Type` = 1
ORDER BY `AddDate`, `Id`";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	while($rows = mysql_fetch_array($result))
	{
		echo sprintf($format, $rows['Title'], nl2br($rows['Text']));
	}
	if ($close_connection) {
		CloseConnection();
	}
};

function ReadLibrary($format, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `Title`, `Name` 
FROM `Documents`
WHERE `Type` = 3
ORDER BY `AddDate` DESC";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	while($rows = mysql_fetch_array($result))
	{
		$full_link = "Documents/Other/".$rows['Name'];
		echo sprintf($format, $full_link, $rows['Title']);
	}
	if ($close_connection) {
		CloseConnection();
	}
};

function ReadVislaDocs($format, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `Title`, `Name` 
FROM `Documents`
WHERE `Type` = 1
ORDER BY `AddDate` DESC";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	while($rows = mysql_fetch_array($result))
	{
		$full_link = "Documents/Visla/".$rows['Name'];
		echo sprintf($format, $full_link, $rows['Title']);
	}
	if ($close_connection) {
		CloseConnection();
	}
};

function ReadVisnykDocs($format, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `Title`, `Name` 
FROM `Documents`
WHERE `Type` = 2
ORDER BY `AddDate` DESC, `Id` DESC";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	while($rows = mysql_fetch_array($result))
	{
		$full_link = "Documents/Visnyk/".$rows['Name'];
		echo sprintf($format, $full_link, $rows['Title']);
	}
	if ($close_connection) {
		CloseConnection();
	}
};

function ReadVislaLinks($format, $close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `Title`, `Link` 
FROM `Links`
WHERE `Type` = 1
ORDER BY `AddDate` DESC";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	while($rows = mysql_fetch_array($result))
	{
		echo sprintf($format, $rows['Link'], $rows['Title']);
	}
	if ($close_connection) {
		CloseConnection();
	}
};

function GetSubscriptionMails($close_connection) {
	global $connection;
	OpenConnection();

	$query = "SELECT `GetSubscriptionMails` (
) AS `SubscriptionMails` ;";

	$result = mysql_query($query, $connection) or die("Error on executing the query");

	if ($close_connection) {
		CloseConnection();
	}

	if ($rows = mysql_fetch_array($result)) {
		 return $rows["SubscriptionMails"];
	}
};

?>
