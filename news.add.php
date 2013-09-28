<?php
//echo "add news";
include 'functions.php';
include 'db_write_helper.php';

$message_type = 0;

if (/*IsAdmin()*/true) {
	$date = strtotime($_POST["date"]);
	$directory = "News/".date('y', $date)."/".date('m', $date)."/".date('d', $date);
	$error = CopyFile("file", $directory);
	if (empty($error)) {
		AddNews($_POST["date"], $_POST["title"], $_FILES["file"]["name"], true);
		$message_type = 9;
	} else {
		$message_type = $error;
	}
}

header("Location: /message/".$message_type);

?>
