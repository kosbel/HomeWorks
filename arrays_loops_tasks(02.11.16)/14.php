<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 04.11.2016
 * Time: 1:32
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);

$e = 4;

foreach ($arr as $value)
{
    if ($e == $value)
    {
        echo "Есть!";
        exit();
    }
}

echo "Нет!";