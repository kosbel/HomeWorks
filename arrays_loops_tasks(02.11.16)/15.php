<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 14:10
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);

$count = 0;

foreach ($arr as $value)
{
    $count++;
}

echo "Количество элементов = $count";