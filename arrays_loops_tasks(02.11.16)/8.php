<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 03.11.2016
 * Time: 23:12
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $key => $item)
{
    ($key == 0) ? print "-": print "";
    echo $item . "-";
}