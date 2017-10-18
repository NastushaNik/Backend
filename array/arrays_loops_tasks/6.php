<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 21:20
 */
//Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
//русские — в массив $ru.
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//$en = array('green', 'red','blue');
//$ru = array('зеленый', 'красный', 'голубой');

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key=>$value){
    $en[] = $key;
    $ru[] = $value;
}

print_r($en);
print_r($ru);


