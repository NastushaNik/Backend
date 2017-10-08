<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 30.09.2017
 * Time: 9:36
 */
//Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.

$num = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($num as $value){
    $result += $value;
}
print_r($result);