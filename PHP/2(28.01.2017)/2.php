<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.02.2017
 * Time: 17:34
 */
$arr = array('Коля'=>'200','Вася'=>'300','Петя'=>'400');
foreach ($arr as $key => $item) {
    echo '<pre>',$key,'-зарплата ',$item, '$ доларов.','</pre>';
}