<?php

const TITLE = 'Урок №2';



?>
<!doctype html>
<html lang="ru-RU">
<head>

<meta charset="utf-8">
<title><?=TITLE?></title>

</head>

<body>

<h1>Урок №2</h1>

</br>
<h4>1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: </br>
если $a и $b положительные, вывести их разность;</br>
если $а и $b отрицательные, вывести их произведение;</br>
если $а и $b разных знаков, вывести их сумму;</br>
ноль можно считать положительным числом.</h4>
<hr>
</br>

<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.*/

$a = 10;
$b = 20;

if ($a >= 0 && $b >= 0)

	echo 'А(10) и В(20) - положительные! Их разность = ' .($a - $b);
	
elseif ($a < 0 && $b < 0)
	
	echo 'Произведение:' .($a*$b);

elseif (($a<0&&$b>0) || ($a>0&&$b<0))

	echo 'Сумма:' .($a + $b);
	
else 

		echo '$a = '.$a.' и $b = '.$b.''.PHP_EOL;
	


?>

</br>
<h3>2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</h3>
<hr>
</br>

<?php

/*2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.*/



$a = rand(0,15);

echo 'Случайное число: '.$a.' </br>'.PHP_EOL;

echo 'Понеслась: '.PHP_EOL;

switch ($a){

case 0: echo '0-'; case 1: echo '1-'; case 2: echo '2-'; case 3: echo '3-'; case 4: echo '4-'; case 5: echo '5-'; case 6: echo '6-'; case 7: echo '7-'; case 8: echo '8-'; case 9: echo '9-'; case 10: echo '10-'; case 11: echo '11-'; case 12: echo '12-'; case 13: echo '13-'; case 14: echo '14-'; case 15: echo '15 - конец';  break;

   default:
   echo 'Число не из ряда с 1 по 15! Как так?';
   break;
}   
   
?>

</br>
<h3>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</h3>
<hr>
</br>

<?php

/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/

$x = 101;
$y = 202;

global $x, $y;

function sum($x, $y)

{
return ($x + $y);
}

$sum = sum($x, $y);
echo 'Сумма 101 и 202: ' .$sum.'</br>';

function razn($x, $y)
{
   return ($x - $y);
}
$razn = razn(101, 202);
echo 'Разность: ' .$razn.'</br>';

function pro($x, $y)

{
   return ($x * $y);
}
$pro = pro(101, 202);
echo 'Произведение: ' .$pro.'</br>';

function chast($x, $y)

{
   return ($x / $y);
}

$chast = chast($y, $x);
echo 'Частное:' .$chast.'</br>';

/*$x = 101;
$y = 202;

global $x, $y;
function summ ($a,$b): {return $a + $b;}
function razn ($a,$b): {return $a - $b;}
function proizv ($a,$b): {return $a * $b;}
function chast ($a,$b): {if $a !=0 && $b != 0 return $a/$b;}*/

   
?>

</br>
<h3>4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</h3>
<hr>
</br>
<?php

function mathOperation(int $arg1, int $arg2, str $operation): int {

switch ($operation) {
	case 'Сумма': 
	return sum($arg1, $arg2);
	
	case 'Разность':
	return razn($arg1, $arg2);

	case 'Частное':
	return chast($arg1, $arg2);
	
	case 'Произведение':
	return pro($arg1, $arg2);


	}	
	
}

echo $operation;

?>

</br>
<h3> 6.*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</h3>
<hr>
</br>

<?php

function power(int $val, int $pow){
	
	if ($pow == 1){
		
		echo 'Все! Степень равна 1 и наш результат:  ' .$val .PHP_EOL .PHP_EOL;
		return $val;
	}
		
		echo 'Степень:  ' .$pow-- .PHP_EOL .PHP_EOL;
		echo 'Результат:  ' .$val .PHP_EOL .PHP_EOL;
		
		$val *= $val;
		power($val,$pow);
			
}
power (5,3);

?>

</br>
<h3> 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:</h3>
<hr>
</br>

<?php

$chas = date('H');
$minuta = date ('i');

echo 'Время не по-русски! Текущее время: ' .$chas. ' часов и ' .$minuta. ' минуток' .PHP_EOL;

function hours (int $chas): string 
{
	if ($chas > 5 && $chas < 20) {
		return $chas . ' часов';
	}
	
	elseif ($chas == 1){
		return $chas . ' час';
	}
	
	else 
		return $chas . ' часа';	
	
}

function minutes (int $minuta): string 
{
	if ($minuta == 1) {
		return $minuta . ' минута';
	}
	
	elseif ($minuta == 2 || 3 || 4){
		return $minuta . ' минуты';
	}
	
	else 
		return $minuta . ' минут';	
	
}

/*function minutes (int $minuta): string 
{
	if ($minuta > 10 && $minuta < 20) {
		return $minuta . ' минут';
	}
	
	switch ($minuta % 10) {
	case 1:
		return $minuta . ' минута';
	
	case 2 || 3 || 4:
		return $minuta . ' минуты';

	default:
		return $minuta . ' минут';
		
	}
	
}*/

echo 'А теперь время по-русски! Текущее время: ' .hours($chas) . ' ' .minutes($minuta);

?>

</body> 
</html>
