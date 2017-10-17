<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 17.10.2017
 * Time: 21:13
 */
//Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
//Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
//    Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все
//ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.

echo '<table>';
$row = rand(5, 15);
$cols = rand(1, 15);
$colors = array('red','yellow','blue','gray','maroon','brown','green');

for ($i=1; $i<=$row; $i++){
    echo '<tr>';
    for ($j=1; $j<=$cols; $j++){
        $number = rand(1, 100);
        $randColors = $colors[array_rand($colors)];
        echo '<td style="background-color:'.$randColors.'">'.$number.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
