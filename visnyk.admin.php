<?php

include 'functions.php';

if (/*IsAdmin()*/true){
	echo "<h4>Додати вісник:</h4>";
	echo "<form action=\"/add/visnyk\"  method=\"post\"
enctype=\"multipart/form-data\" target=\"_self\">";
	echo "<div class=\"admin\">";
	echo "<table class=\"data_block\">";
	echo "<tr><td><label for=\"title\">Заголовок:</label></td><td><textarea rows=\"3\" cols=\"50\" name=\"title\" required=\"true\"></textarea></td></tr>";
	echo "<tr><td><label>Документ:</label></td><td><input type=\"file\" name=\"file\" required=\"true\"></input></td></tr>";
	echo "<tr><td></td><td><input type=\"submit\" value=\"Додати\"></input></td></tr>";
	echo "</table>";
	echo "</div>";
	echo "</form>";
}
?>
