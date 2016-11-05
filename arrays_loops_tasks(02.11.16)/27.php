<?php

$row = 26;
$cols = 28;

$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

echo "<table>";

for ($r = $row; $r > 0; $r--)
{
    echo "<tr>";

    for ($c = $cols; $c > 0; $c--)
    {
        $key = array_rand($colors);
        $number = rand();
        echo "<td style='background-color:$colors[$key]'>$number</td>";
    }
    echo "</tr>";
}

echo "</table>";
