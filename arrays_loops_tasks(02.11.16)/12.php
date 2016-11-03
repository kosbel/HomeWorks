<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 04.11.2016
 * Time: 0:14
 */

$n = 1000;
$num = 0;

for ($i = $n; $i > 50; $i /= 2)
{
    $num++;
}

echo "Количество итераций = " . $num . "<br>";
echo "Результат = " . $i;