<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 16:38
 */
$a = [4, 2, 5, 19, 13, 0, 10,];
$b = [2, 3, 4];
foreach ($a as $item) {
    $item = array_intersect ($a, $b);
    break;
}
if ($item == true ) {
    echo 'Есть!';
} else {
    echo 'Нет!';
}

