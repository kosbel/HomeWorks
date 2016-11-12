<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 10.11.2016
 * Time: 21:13
 */

function printDirSearchWord ($direct, $search_str)
{
    $arr_dir = scandir($direct);

    foreach ($arr_dir as $item)
    {
        if ($item === $search_str)
        {
            foreach ($arr_dir as $value)
            {
                echo $value . "<br>";
            }
            return true;
        }
    }
    echo "Искомого слова нет в директории";
}

printDirSearchWord("d:", "Kostyaa");