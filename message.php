<?php 
echo "<p>";
$type = $_GET["type"];
switch ($type) {
    case "0": echo "Перепрошуємо, сталася неочікувана помилка.";
	break;
    case "1": echo "На вашу пошту надіслано лист для підтвердження активації підписки на вісник.";
	break;
    case "2": echo "Нам дуже шкода, аде сталася помилка під час надсилання лист для підтвердження активації. Будь ласка, зачекайте пару хвилин і попробуйте підписатися на розсилку знову.";
	break;
    case "3": echo "Підписка на вісник - активована.";
	break;
    case "4": echo "Сталася помилка під час завантаження файла.";
	break;
    case "5": echo "Файл з даним ім’ям уже існує.";
	break;
    case "6": echo "Вісник додано, розсилка виконана.";
	break;
    case "7": echo "Вісник додано, розсилка не була виконана через непербачувані обставини.";
	break;
    case "8": echo "Вісник додано, розсилка не була виконана через відсутність підписників.";
	break;
    case "9": echo "Новину додано.";
	break;
    case "10": echo "Сталася помилка під час копіювання файла.";
	break;
}
echo "</p>";

?>
