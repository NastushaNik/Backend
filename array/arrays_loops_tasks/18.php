<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 09.10.2017
 * Time: 7:34
 */
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
//выходные дни следует вывести жирным.

$days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

foreach ($days as $value){
    if ($value == 'Суббота' || $value == 'Воскресенье'){
        echo '<b>'.$value.'</b> <br>';
    }else{
        echo $value.'<br>';
    }
}