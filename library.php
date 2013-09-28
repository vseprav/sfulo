<?php 

include 'db_read_helper.php';

echo "<div class=\"doc_list\">";
echo "<h4>Інші видання та документи:</h4>";
echo "<ul>";

ReadLibrary("<li><a href=\"%1\$s\" target=\"_blanck\" class=\"doc_item\">%2\$s</a></li>", true);

echo "</ul>";
echo "</div>";

?>
