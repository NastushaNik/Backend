<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 30.09.2017
 * Time: 9:27
 */
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.<
$arr1 = array('html','css','php','js','jq');
foreach ($arr1 as $value){
    print_r($value.'<br>');
}
