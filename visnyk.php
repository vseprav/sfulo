<?php 

include 'db_read_helper.php';

echo "<h4>З 2013 року виходить \"Вісник Світової Федерації Українських Лемківських Обєднань\" - oфіційне видання СФУЛО.</h4>";
echo "<p>
Основна мета часопису – динамічно висвітлювати діяльність усіх суб’єктів СФУЛО.<br />
Редакційний колектив: Софія Федина, Андрій Стадник, Назар Радь, Олесь Куйбіда, Роман Піняжко, Орест Ваврух, Богдан Сиванич
</p>";
echo "<p>
Адреса редакції: visnyk.sfulo@gmail.com.<br />
​Можна надсилати свої матеріали.<br />
Рішення про публікацію прийматиме редакційна рада.​
</p>";
echo "<div class=\"doc_list\">";
echo "<h4>Номери вісника можна скачати у форматі .pdf :</h4>";
echo "<ul>";
	
ReadVisnykDocs("<li><a href=\"%1\$s\" target=\"_blanck\" class=\"doc_item\">%2\$s</a></li>", true);

echo "</ul>";
echo "</div>";

echo "<form action=\"/subscription\" method=\"post\" target=\"_self\">";
echo "<div class=\"visnyk_subscription\">";
echo "<input type=\"checkbox\" id=\"subscription_checkbox\"> Підписатися на розсилку</input>";
echo "<div class=\"visnyk_subscription_info unvisible\">";
echo "<label for=\"email\">E-mail:<label><input type=\"email\" name=\"email\" required=\"true\"></input>";
echo "<input type=\"submit\" value=\"Підписатися\" />";
echo "</div>";
echo "</div>";
echo "<form>";
echo "<script type=\"text/javascript\">
	$('#subscription_checkbox').removeAttr('checked');
	$('#subscription_checkbox').change(function(){
		if ($(this).is(':checked')) {
			$('.visnyk_subscription_info').removeClass('unvisible');
		} else {
			$('.visnyk_subscription_info').addClass('unvisible');
	};
})</script>";

?>
