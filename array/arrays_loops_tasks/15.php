<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 22:47
 */
//Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
//элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
//5, 19, 13, 0, 10.

$array = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($array as $value){
    $count++;
}
echo $count;