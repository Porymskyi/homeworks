<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.02.2017
 * Time: 14:59
 */
$age = 33;
if ( $age < 0 || is_string($age)){
    echo "Неизвестный возраст";
    }
elseif ($age >= 0 && $age <=17) {
    echo "Вам еще работать и работать";
}
elseif ( $age <= 56 && $age >= 18 ) {
    echo "Вам еще работать и работать";

}else {
    echo "Вам пора на пенсию";
}