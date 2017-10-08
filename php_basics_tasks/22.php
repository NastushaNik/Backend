
<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 13:23
 */

//Приведите число -20 к типу boolean. Объясните результат.

$int = -20;
settype($int, "bool");
var_dump($int);
echo "Даже отрицательные значения приводят к true";