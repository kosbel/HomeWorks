<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 10.11.2016
 * Time: 0:14
 */

function printDir ($dir)
{
    $f = scandir($dir);

    foreach ($f as $value)
    {
        echo $value . "<br>";
    }
}

printDir("c:");