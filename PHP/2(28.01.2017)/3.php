<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 15:04
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $key => $item) {
    array_push($en, $key);
    array_push($ru, $item);
}
echo '<pre>' . print_r($en) . '</pre>';
echo '<pre>' . print_r($ru) . '</pre>';