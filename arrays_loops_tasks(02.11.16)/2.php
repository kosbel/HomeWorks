<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 03.11.2016
 * Time: 21:54
 */

$arr = array(1, 20, 15, 17, 24, 35);

$result = 0;

foreach ($arr as $i)
{
    $result += $i;
}

echo "Result = ".$result;//ответ 112