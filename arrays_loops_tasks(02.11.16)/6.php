<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 03.11.2016
 * Time: 22:44
 */

$arr = array('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');

$en = $ru = array();

foreach ($arr as $key => $value)
{
    $en[] = $key;
    $ru[] = $value;
}

echo "<pre>";

print_r($en);

print_r($ru);

echo "</pre>";