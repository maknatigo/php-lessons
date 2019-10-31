<?php 
/* данные для подключения к базе */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'gallery2');
$message_error = NULL;
try {
	$db = new PDO('mysql:host=localhost;dbname=gallery2;','root','');
    $db->exec("set names utf8");
} catch (Exception $e) {
    $message_error = 'Нет подключния к базе данных!';
}