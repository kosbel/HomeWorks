<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 19:40
 */

$arr = array();
$arr_len = 10;

$result_mult = 1;

for ($i = 0; $i < $arr_len; $i++)
{
    $arr[$i] = rand(1, 100);
}

print_r($arr);

echo "<br> Элементы у которых нечетный индекс: ";

for ($j = 0; $j < $arr_len; $j++)
{
    if ($j % 2 == 0)
    {
        $result_mult *= $arr[$j];
    }
    else
    {
        echo $arr[$j] . ", ";
    }
}

echo "<br> Произведение элементов с четными индексами = $result_mult";