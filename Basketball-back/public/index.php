<?php

//phpinfo();

$link = mysqli_connect('mysql', 'admin', 'pass');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Успешно соединились';
mysqli_close($link);