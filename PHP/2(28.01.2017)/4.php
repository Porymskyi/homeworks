<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 15:47
 */
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $item) {
    if ($item > 3 && $item < 10 ) {
    echo $item .'<br>';
    }
}