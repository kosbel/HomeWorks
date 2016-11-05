<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 14:14
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$n = $n1 = 3;//шаг перехода на другую строку

foreach ($arr as $key => $item)
{
    if ($key == ($n - 1))
    {
        echo $arr[$key];
        echo "<br>";
        $n += $n1;
    }
    else
        echo $arr[$key] . ", ";
}