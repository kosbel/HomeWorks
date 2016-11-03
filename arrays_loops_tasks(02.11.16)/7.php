<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 03.11.2016
 * Time: 22:58
 */

$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $value)
{
    if ($value > 3 && $value < 10)
        echo $value . "<br>";
}