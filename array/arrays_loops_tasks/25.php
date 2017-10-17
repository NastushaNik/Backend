<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 17.10.2017
 * Time: 20:34
 */
//Ваше задание создать массив, наполнить это случайными значениями (функция rand),
//найти максимальное и минимальное значение и поменять их местами.

$array = [];
for ($i=1; $i<=10; $i++){
    $array[] = rand(5,15);
}
echo '<pre>';
print_r($array);
echo '<pre>';

$min = min($array);
$max = max($array);
// echo '<br>';
// print_r($min);
// echo '<br>';
// print_r($max);

$changeMin = array_search($min, $array);
$changeMax = array_search($max, $array);
//echo '<br>';
//print_r($changeMin);
//echo '<br>';
//print_r($changeMax);

$array[$changeMin] = $max;
$array[$changeMax] = $min;
echo '<pre>';
print_r($array);
echo '<pre>';

