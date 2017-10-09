<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 09.10.2017
 * Time: 7:44
 */
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
//текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = date("l");

foreach ($days as $value){
    if ($value == $day){
        echo '<i>'.$value.'</i> ';
    }else{
        echo $value.' ';
    }
}