<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.02.2017
 * Time: 17:17
 */
$arr = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой',);
foreach ($arr  as $key => $item) {
    echo '<pre>', 'Ключ:', $key, '</pre>';
}
foreach ($arr  as $item) {
    echo '<pre>', 'Значение:', $item, '</pre>';
}
?>