<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 03.11.2016
 * Time: 22:17
 */

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

foreach ($arr as $key => $value)
{
    echo "Ключ: " . $key . "<br>";
}

echo "<br>";

foreach ($arr as $value)
{
    echo "Элемент: " . $value . "<br>";
}