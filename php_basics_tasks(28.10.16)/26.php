<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 30.10.2016
 * Time: 16:33
 */

define("DAYS_COUNT", 7);
define("MONTH_COUNT", 12);

echo "Константы объявленый функцией define(): ";
echo DAYS_COUNT;
echo ", ";
echo MONTH_COUNT;

echo "<br>";
//==============================================================

const DAYS_COUNT1 = 7;
const MONTH_COUNT1 = 12;


echo "Определение констант с помощью ключевого слова const: ";
echo DAYS_COUNT1;
echo ", ";
echo MONTH_COUNT1;