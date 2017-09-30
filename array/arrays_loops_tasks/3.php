<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 30.09.2017
 * Time: 10:17
 */
$num = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($num as $value){
    $result += $value **2;
}
print_r($result);