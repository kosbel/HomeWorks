<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 16:26
 */

$arr = array(1 => 'January', 'February', 'March', 'April', 'MayJune', 'July',
            'August', 'September', 'October', 'November', 'December');

$month = $arr[10];

foreach ($arr as $value)
{
    if ($value == $month)
    {
        echo "<strong>";
        echo $value . ", ";
        echo "</strong>";
    }
    else
        echo $value . ", ";
}