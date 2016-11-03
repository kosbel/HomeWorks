<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 03.11.2016
 * Time: 22:36
 */

$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');

foreach ($arr as $key => $value)
{
    echo $key . " - зарплата " . $value . " долларов<br>";
}