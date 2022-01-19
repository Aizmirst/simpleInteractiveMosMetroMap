<?php

//--------------------------Настройки подключения к БД-----------------------
$db_host = 'std-mysql.ist.mospolytech.ru';
$db_user = 'std_1592_metro_station_close'; //имя пользователя совпадает с именем БД
$db_password = '1234567890'; //пароль, указанный при создании БД
$database = 'std_1592_metro_station_close'; //имя БД, которое было указано при создании
$conn = mysqli_connect($db_host, $db_user, $db_password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>