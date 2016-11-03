<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 03.11.2016
 * Time: 22:03
 */

$arr = array(26, 17, 136, 12, 79, 15);

$result = 0;

foreach ($arr as $i)
{
    $result += $i * $i;
}

echo "Result = " . $result;