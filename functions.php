<?php

function IsAdmin() {
	$file = fopen("Data/users.txt", "r") or exit("Error on reading admin metadata!");
	$admin_data = fgets($file);
	fclose($file);

	$admin_data = split(';', $admin_data); 
	$user = get_current_user();

	return in_array($user, $admin_data);
};

function CopyFile($fileKey, $directory) {
	if ($_FILES[$fileKey]["error"] > 0) {
		//echo "Error: " . $_FILES["file"]["error"] . "<br>";
		return 4;
	} else {
		if (!file_exists($directory)) {
			mkdir($directory, 0777, true);
		}
		$full_file_name = $directory."/".$_FILES[$fileKey]["name"];
		if (file_exists($full_file_name)) {
			//echo $_FILES["file"]["name"] . " already exists. ";
			return 5;
		} else if (!move_uploaded_file($_FILES[$fileKey]["tmp_name"], $full_file_name)) {
			return 10;
		}
	}
};

function CurrentPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	 	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	 	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
}

?>
