<?php

//$today = getdate();
//$year = $today['Y'];
$year = date('Y');
const TITLE = 'Привет, GEEKS';
const H1 = 'Мой первый код </br>';


?>
<!doctype html>
<html lang="ru-RU">
<head>

<meta charset="utf-8">
<title><?=TITLE?></title>

</head>

<body>
<header>
<?=H1?>
<strong>Начало: <?=$year?></strong>
</header>
<content>
Задание 1: </br>

Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.
</br>
Задание 2: </br>
*Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя. </br>

Ответ 2: </br>

<?php 
$a = 1;
$b = 2;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;


echo 'a = ' . $a .'</br>';
echo 'b = ' . $b .'</br>';


?>

<content>




</body> 
</html>





