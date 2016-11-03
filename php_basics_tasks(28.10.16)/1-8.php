<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 29.10.2016
 * Time: 18:18
 */

$name = "Константин";
$age = 24;

echo "Меня зовут: {$name}. ";
echo "Мне {$age} лет. ";

if ($age >= 18 && $age <= 59)
{
    echo "Вам еще работать и работать.";
}
elseif ($age > 59)
{
    echo "Вам пора на пенсию.";
}
elseif ($age > 0 && $age <= 17)
{
    echo "Вам еще рано работать.";
}
else
{
    echo "Неизвестный возраст.";
}