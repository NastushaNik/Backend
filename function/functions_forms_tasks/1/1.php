<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 21.10.2017
 * Time: 8:58
 */

//Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом
//и во втором поле ввода. Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
//которая будет возвращать массив с общими словами.

if (filter_has_var(INPUT_POST, 'a') && filter_has_var(INPUT_POST, 'b')){
    $a = $_POST['a'];
    $b = $_POST['b'];
    function getCommonWords($a, $b){
        $a = explode(' ', $a);
        $b = explode(' ', $b);
        //print_r($a);
        //print_r($b);
        for ($i=0; $i<=count($a)-1; $i++){
            for ($j=0; $j<=count($b)-1; $j++){
                if ($a[$i] == $b[$j]){
                    $result[] = $a[$i];
                }
            }
        }return $result;
    }print_r(getCommonWords($a, $b));
}