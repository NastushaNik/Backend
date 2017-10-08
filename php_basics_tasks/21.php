<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 13:23
 */

//Приведите число 0 к типу boolean. Объясните результат.

$int = 0;
settype($int, "bool");
var_dump($int);
echo "Так как наша переменная 0 или пустая строка, то при приведении ее к bool значение false";