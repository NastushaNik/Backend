<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 17.10.2017
 * Time: 21:57
 */
//Вывести таблицу умножения с помощью двух циклов for.

for ($i=1; $i<=9; $i++){
    for ($j=1; $j<=9; $j++){
        echo $i * $j .' ';
    }
    echo '<br>';
}