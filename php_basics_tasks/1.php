<?php

$name = "Анастасия";

$age = 26;

echo "'Меня зовут:".$name."'";

echo "<br>'Мне ".$age." лет.'";

if ($age >= 18 && $age <= 59) {
	echo "<br>'Вам еще работать и работать'";
}
else if ($age > 59) {
	echo "<br>'Вам пора на пенсию'";
}
else if ($age >= 0 && $age <= 17) {
	echo "<br>'Вам еще рано работать'";
}
else if ($age < 0) {
	echo "<br>'Неизвестный возраст'";
}

$day = 5;
switch ($day) {
	case '1':
    case '2':
    case '3':
    case '4':
    case '5': echo "<br>Это рабочий день"; break;
    case '6':
    case '7': echo "<br>Это выходной день"; break;
    default: echo "<br>Неизвестный день"; break;
}

$s = 50;
$t = 2;
$v = $s/$t;
$v2 = $v*1000/3600;
echo '<br>Скорость автомобиля '.$v.'км/час или '.$v2.'м/сек';

$foo = 'bar';
$bar = 10;
echo '<br>$'.$foo;

$a = 10;
$b = 2;
$operator = '*';
echo '<br>'.$a .$operator. $b;


