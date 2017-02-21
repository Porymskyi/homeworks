<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2017
 * Time: 20:07
 */
$j=1;
for($i=20;$i>=1;$i--)
{
    echo  str_repeat("&nbsp;",$i-1);
    echo  str_repeat('x',$j++);
    echo "<br />";
}

