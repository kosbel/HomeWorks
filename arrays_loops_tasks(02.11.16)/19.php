<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 16:47
 */

$days_week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

$day = $days_week[5];

foreach ($days_week as $value)
{
    if ($day == $value)
        echo "<i> $value <br></i>";
    else
        echo "$value <br>";
}