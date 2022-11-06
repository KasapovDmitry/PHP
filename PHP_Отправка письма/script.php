<?php
$to = "vadikgrechko@mail.ru"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла
$message = "Написал: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента

$mas = [ $_POST['name'], $_POST['email'],  $_POST['phone'], $_POST['message']];

foreach ($mas as $i) {
    if ($i == null) {
        $a ="<div class = 'error'>Ошибка. Одно или несколько Полей не заполнено!</div>";
        include ('index.php');
        exit;
    }
}

$a = "<div class = 'correct'>Письмо отправленно!</div>";
require ('index.php');
mail($to, $tema, $message, $headers);
exit;
?>