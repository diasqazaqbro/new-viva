<?php
$name = $_POST['name'];
$email = $_POST['email'];
$work = $_POST['work'];
$tel = $_POST['tel'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$work = htmlspecialchars($work);
$tel = htmlspecialchars($tel);

$name = urldecode($name);
$email = urldecode($email);
$work = urldecode($work);
$tel = urldecode($tel);

$name = trim($name);
$email = trim($email);
$work = trim($work);
$tel = trim($tel);

if (mail('admin@mail.ru',
'Новое письмо',
'Имя: '.$name,
'Почта: '.$email,
'Номер: '.$tel,
'Должность: '.$work,))
{
    echo ('Сообщение отправилось');
} else {
    echo ('Ошибка сообщение не отправилось');
}
?>