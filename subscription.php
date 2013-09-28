<?php 

include 'functions.php';
include 'db_write_helper.php';

$email = $_POST["email"];
$guid = $_GET["guid"];

$message_type = 0;

if (!empty($email)) {

	$guid =  uniqid();
	AddSubscription($email, $guid, true);
	
	$current_page = CurrentPageURL();
	if (mail($email , "Підписка на вісник" , "Добрий день.

Ваша email адреса була вказана для підписки на вісник СФУЛО.
Для підтвердження підписки вам потрібно перейти за посиланням: ".$current_page."/guid=".$guid, "From: Вісник СФУЛО <noreply@s3.uahosting.com.ua>"/* <visnyk.sfulo@gmail.com>*/)) {
		$message_type = 1;
	} else {
		$message_type = 2;
	}
}
else if (!empty($guid)) {
	//echo $guid;
	ActivateSubscription($guid, true);
	$message_type = 3;
}
echo '<meta http-equiv="refresh" content="0;URL=/message/' . $message_type . '">';
?>