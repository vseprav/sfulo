<?php
//echo "news";
include 'db_read_helper.php';

echo "<h3>Новини</h3>";

ReadNews("<p> %1\$s - %2\$s<a href=\"%3\$s\" target=\"_blanck\" class=\"read_more\">читати</a></p>", true);

?>
