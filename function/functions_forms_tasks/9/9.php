<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 13:49
 */
//Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.

if (filter_has_var(INPUT_POST, 'inverts')){
    $a = $_POST['inverts'];
    function inverts($str){
        $result = "";
        for ($i = strlen($str)-1; $i >= 0; $i--){
            $result.=$str[$i];
        }
        return $result;
    }
    echo inverts($a);
}