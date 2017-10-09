<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 09.10.2017
 * Time: 7:51
 */
//20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
//рядов, а не 5.<br><br>
//x<br>
//xx<br>
//xxx<br>
//xxxx<br>
//xxxxx

for ($i=1; $i<21; $i++){
    for ($j=1; $j<=$i; $j++){
        echo 'x';
    }
    echo '<br>';
}

for ($i=1; $i<=20; $i++){
    for ($k=1; $k<=$i; $k++){
        for ($j=20; $j>=$i; $j--){
            echo '&nbsp;';
        }
        echo 'x';
    }
    echo '<br>';
}