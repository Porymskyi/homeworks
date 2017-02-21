<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 17:29
 */
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $key=>$item){
    echo $item;
    if($key % 3 == 2){
        echo "<br>";
    }
}