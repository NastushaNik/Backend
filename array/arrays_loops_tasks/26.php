<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 17.10.2017
 * Time: 21:02
 */
//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
//Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
//индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
//индекс

$array = array();

for ($i=1; $i<=20; $i++){
    $array[] = rand(1, 100);
}
foreach ($array as $key => $value){
    if ($value > 0 && $key % 2 == 0){
        //echo 'значение '.$value.' больше ноля и ключ '.$key.' парные <br>';
    }
    if ($value > 0 && $key % 2 == 1){
        echo 'значение '.$value.' больше ноля и ключ '.$key.' не парные <br>';
    }

}
