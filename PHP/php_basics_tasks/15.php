<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.02.2017
 * Time: 21:27
 */
$a = 45;
$b = 7;
$operator = '+' || '-' || '*' || '/'  || '%';
switch ($operator) {
    case '+': $results = $a + $b; echo "Сложение= $results <br>";
    case '-': $results = $a - $b; echo "Вычитание= $results<br>";
    case '*': $results = $a * $b; echo "Умножение= $results<br>";
    case '/':
        if($b == 0) {
            $results = 'На 0 делить нельзя!';
        } else {
            $results = $a / $b;
        } echo "Деление= $results<br>";
    case '%': $results = $a % $b; echo "Остаток от деления= $results<br>"; break;
}
