<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 04.11.2016
 * Time: 1:21
 */

echo "<table border='1'>";

for ($i = 1; $i < 10; $i++)
{
    echo "<tr>";

    for ($j = 1; $j < 10; $j++)
    {
        echo "<td width='20'>" . $i * $j . "</td>";
    }
    echo "</tr>";
}

echo "</table>";