<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 13:00
 */

//Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является
// отрицательным числом, или вовсе числом не является.

$age = 67;
if ($age < 0 || is_int($age) == false) {
    echo "'Неизвестный возраст'";
}else if ($age > 59) {
    echo "'Вам пора на пенсию'";
}else if ($age >= 0 && $age <= 17) {
    echo "'Вам еще рано работать'";
}else if ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать.";

}
