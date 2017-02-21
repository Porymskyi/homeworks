<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 19:26
 */
$days = [
    1 => "Понеділок",
    2 => "Вівторок",
    3 => "Середа",
    4 => "Четер",
    5 => "П'ятниця",
    6 => "Субота",
    7 => "Неділя",
];
foreach ($days as $key => $item) {
    if ($key <=5) {
        echo $item."<br>";
    } else {
        echo "<b>{$item}</b><br>";
    }
}