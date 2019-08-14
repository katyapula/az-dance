<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Обратная связь</title>
</head>
<body>
<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['age'])) {$age = $_POST['age'];}
if (isset($_POST['group'])) {$group = $_POST['group'];}
if (isset($_POST['time'])) {$time = $_POST['time'];}
if (isset($_POST['comments'])) {$comments = $_POST['comments'];}
$to = "info@az-dance.kiev.ua";
$subject = "Записаться на урок";
$message = "Имя пославшего: $name \n
Электронный адрес: $phone\n
Возраст: $age\n
Группа: $group\n
Время: $time\n
Дополнительно: $comments\n";
$send = mail ($to,$subject,$message);
if ($send)
{
echo "<center><b>Спасибо за отправку вашей заявки.<br>В ближайшее время мы с Вами свяжемся.<br>
<a href=index.html>Нажмите</a>, чтобы вернуться на главную страницу";
}
else
{
echo "Ошибка. Сообщение не отправлено!";
}
?>
</body>
</html>