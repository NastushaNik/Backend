<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 13:22
 */
//Приведите число 20 к типу boolean. Объясните результат.

$int = 20;
settype($int, "bool");
var_dump($int);
echo "Так как наша переменная !=0 или не пустая строка, то при приведении ее к bool значение true";