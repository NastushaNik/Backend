<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 30.09.2017
 * Time: 10:19
 */
//Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.


$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach($arr as $key => $value){
    print_r($key.'<br>');
}

foreach($arr as $value){
    print_r($value .'<br>');
}

