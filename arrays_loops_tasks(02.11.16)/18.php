<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 16:37
 */

$days_week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

foreach ($days_week as $key => $value)
{
    if ($key == 5 || $key == 6)
        echo "<strong> $value <br></strong>";
    else
        echo "$value <br>";
}