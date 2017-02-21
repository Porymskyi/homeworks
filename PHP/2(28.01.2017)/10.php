<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 18:12
 */
$days = [
    0 => "Неділя",
    1 => "Понеділок",
    2 => "Вівторок",
    3 => "Середа",
    4 => "Четер",
    5 => "П'ятниця",
    6 => "Субота",
];
$thisDey = date('w');
foreach ($days as $key => $item) {
    if ($key == $thisDey) {
        echo "<i>{$item}</i><br>";
    } else {
       echo $item."<br>";
    }
}

