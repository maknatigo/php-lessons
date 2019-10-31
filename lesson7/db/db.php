<?php 
/* данные для подключения к базе 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'gallery2');*/
function getDB_config_gb(){
return [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'db' => 'gallery2'
];
}

$db = getDB_config_gb();

/*$message_error = NULL;
try {
	$db = new PDO('mysql:host=localhost;dbname=gallery2;dbuser=root');
    $db->exec("set names utf8");
} catch (Exception $e) {

    $message_error = 'Нет подключния к базе данных!';
}*/



/**/