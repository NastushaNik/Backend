<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 22.10.2017
 * Time: 13:52
 */

//<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
//Реализовать с помощью функции.</p>

if(filter_has_var(INPUT_POST, 'message')){
    $message = $_POST['message'];

    function top_words($a){
        $message_array = explode(' ', $a);
        //print_r($message_array);
        for ($i=0; $i < count($message_array); $i++){
            for ($j=0; $j < count($message_array)-1; $j++){
                if (mb_strlen($message_array[$j]) < mb_strlen($message_array[$j+1])){
                    $result = $message_array[$j];
                    $message_array[$j] = $message_array[$j+1];
                    $message_array[$j+1] = $result;
                }
            }
        }return (array_slice($message_array, 0, 3));


    }print_r(top_words($message));
}
