<?php

function OpenConnection() {
	global $connection;
	if (empty($connection))
	{
		//echo "open connection";
		$file = fopen("Data/db.txt", "r") or exit("Error on reading database metadata!");
		$db_data = fgets($file);
		fclose($file);

		$db_data = split(';',$db_data);
		$dbhost = 'localhost';//$db_data[0];
		$dbuser = 'vseprav_sfulo';//$db_data[1];
		$dbpassword = 'aMNx2(if9ch;';//$db_data[2];
		$dbname = 'vseprav_sfulo';//$db_data[3];
		$connection = mysql_connect($dbhost, $dbuser, $dbpassword) or die("Error on connecting to database");
		mysql_select_db($dbname, $connection) or die("Error on selecting the database");
		mysql_query("SET NAMES utf8");
	}
	return $connection;
};

function CloseConnection() {
	global $connection;
	//echo "close connection";
	mysql_close($connection);
};

?>