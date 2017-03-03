<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 16:38
 */
$a = [4, 2, 5, 19, 13, 0, 10,];
$b = [2, 3, 4];
foreach ($b as $item) {
    if (in_array($item, $a) ) {
        echo $item,'-Есть!','<br>';
    } else {
        echo $item,'-Нет!','<br>';
    }
}

