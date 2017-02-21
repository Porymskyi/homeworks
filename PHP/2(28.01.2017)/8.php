<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 18:59
 */
$months = [
    1 => "Січень",
    2 => "Лютий",
    3 => "Березень",
    4 => "Квітень",
    5 => "Травень",
    6 => "Червень",
    7 => "Липень",
    8 => "Серпень",
    9 => "Вересень",
    10 => "Жовтень",
    11 => "Листопад",
    12 => "Грудень"
];
$month = 2;
foreach ($months as $key => $item) {
    if ($key == $month) {
        echo "<b>{$item}</b><br>";
    } else {
        echo  $item. "<br>";
    }

}