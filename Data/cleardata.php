<?php
//echo "db read helper";


include_once 'db_helper.php';


global $connection;
	
OpenConnection();

	

$query = "DELETE 
FROM `News`
";

	
$result = mysql_query($query, $connection) or die("Error on executing the query");



$query = "DELETE 
FROM `History`
";

	
$result = mysql_query($query, $connection) or die("Error on executing the query");



$query = "DELETE 
FROM `Documents`
";

	
$result = mysql_query($query, $connection) or die("Error on executing the query");



$query = "DELETE 
FROM `Links`
";

	
$result = mysql_query($query, $connection) or die("Error on executing the query");



$query = "DELETE 
FROM `Subscription`
";

	
$result = mysql_query($query, $connection) or die("Error on executing the query");




CloseConnection();

?>
