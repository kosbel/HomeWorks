<?php

function pre(array $arr)
{
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}

$arr = array();
$len_arr = 10;//длина массива

//заполнение массива случайными числами от 0 до 100
for ($i = 0; $i < $len_arr; $i++)
{
    $arr[$i] = rand(0, 100);
}

pre($arr);

//находим максимальное и минимальное значение
$max = max($arr);
$min = min($arr);

//находим ключи max и min
$key_max = $key_min = null;

for ($i = 0; $i < $len_arr; $i++)
{
    if ($arr[$i] == $max)
        $key_max = $i;
    if ($arr[$i] == $min)
        $key_min = $i;
}

echo "Max = [$key_max] => $max <br>";
echo "Min = [$key_min] => $min <br>";
echo "Меняем местами!";

//меняем местами
$temp = $arr[$key_max];
$arr[$key_max] = $arr[$key_min];
$arr[$key_min] = $temp;

pre($arr);

echo "Max = [$key_min] => $max <br>";
echo "Min = [$key_max] => $min <br>";