<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 25.09.2017
 * Time: 19:05
 */
$complex_arr2 = array();
$complex_arr2[2] = array('c'=>'ivan');
$complex_arr2[3] = array('a'=>'igor');
$complex_arr2[4] = array('b'=>'vasya');

function myCamp2($a, $b){
    if ($a == $b){
        return 0;
    }
    return $a > $b ? 1 : -1;
}
uksort($complex_arr2, myCamp2);
print_r($complex_arr2);
