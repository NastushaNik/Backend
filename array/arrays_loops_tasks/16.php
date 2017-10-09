<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 09.10.2017
 * Time: 6:48
 */
//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
//выведите на экран столбец элементов массива, как показано на картинке.
//1, 2, 3
//4, 5, 6
//7, 8, 9
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($array as $value){
    if ($value%3 == 0){
        echo $value. '<br>';
    }else {
        echo $value. ',';
    }
}