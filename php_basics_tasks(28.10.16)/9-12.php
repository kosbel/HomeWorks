<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 29.10.2016
 * Time: 18:21
 */

$day = 3;

switch ($day)
{
    case (1):
    case (2):
    case (3):
    case (4):
    case (5):
        echo "Это рабочий день";
        break;
    case (6):
    case (7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}