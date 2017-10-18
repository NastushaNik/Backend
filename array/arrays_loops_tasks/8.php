<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 21:57
 */
//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
//'­1­2­3­4­5­6­7­8­9­'.

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$str = '-';
foreach ($array as $value) {
    $str .= $value.'-';
}
echo $str;

