<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 15:26
 */
//Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
// Текст должен вводиться с формы.</p>

if (filter_has_var(INPUT_POST, 'text')){
    $text = $_POST['text'];

    function unique_words($a){
        $text_arr = explode(' ', $a);
        foreach ($text_arr as $key1 => $value1){
            foreach ($text_arr as $key2 => $value2){
                if($value1 == $value2){
                    $new_text[$value1] =+ 1;
                }
            }
        }
        print_r(count($new_text));
    }
    unique_words($text);


//    function unique_words($a){
//        $text_arr = explode(' ', $a);
//        $uniq_arr = count(array_unique($text_arr));
//        print_r($uniq_arr);
//    }
//    unique_words($text);
}
