<?php

include 'functions.php';
include 'db_write_helper.php';
include 'db_read_helper.php';

$message_type = 0;

if (/*IsAdmin()*/true) {
	$directory = "Documents/Visnyk";
	$error = CopyFile("file", $directory);
	if (empty($error)) {
		$title = $_POST["title"];
		AddVisnyk($title, $_FILES["file"]["name"], false);
		$to = GetSubscriptionMails(true);
		if (!empty($to)) {
			$message = "Дорогі наші читачі!

Надсилаємо вам черговий номер Вісника Світової Федерації Українських Лемківських Об\"єднань.

Дякуємо всім тим, хто активно надсилає інформацію.
Вітаємо нових читачів, хто долучився до нас цього місяця.
Приємного читання!!!

З повагою,
Редакційний комітет";
			$from = "Вісник СФУЛО <noreply@s3.uahosting.com.ua>";
			$file = $directory."/".$_FILES["file"]["name"];
			$filename = basename($file);
			$file_size = filesize($file);
			$content = chunk_split(base64_encode(file_get_contents($file))); 
			$uid = md5(uniqid(time()));
			$header = "From: ".$from."\r\n"
			      ."MIME-Version: 1.0\r\n"
			      ."Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n"
			      ."This is a multi-part message in MIME format.\r\n" 
			      ."--".$uid."\r\n"
			      ."Content-type:text/plain; charset=iso-8859-1\r\n"
			      ."Content-Transfer-Encoding: 7bit\r\n\r\n"
			      .$message."\r\n\r\n"
			      ."--".$uid."\r\n"
			      ."Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"
			      ."Content-Transfer-Encoding: base64\r\n"
			      ."Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n"
			      .$content."\r\n\r\n"
			      ."--".$uid."--";
			if (mail($to, $title, "", $header)) {
				$message_type = 6;
			} else {
				$message_type = 7;
			}
		} else {
			$message_type = 8;
		}
	} else {
		$message_type = $error;
	}
}
header("Location: /message/".$message_type);
?>
