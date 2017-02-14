<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.02.2017
 * Time: 14:57
 */
$age = 33;
if ($age <= 56 && $age >= 18  ) {
    echo "Вам еще работать и работать";
} elseif ($age >= 0 && $age <=17) {
    echo "Вам еще работать и работать";
}
else {
    echo "Вам пора на пенсию";
}