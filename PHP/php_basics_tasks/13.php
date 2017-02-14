<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.02.2017
 * Time: 19:51
 */
$s = "200км";
$t = "2часа";
$speedKm = $s / $t;
$speedM = ($s * 1000) / ($t * 3600);
echo "$speedKm  км/час <br> $speedM м/сек ";

