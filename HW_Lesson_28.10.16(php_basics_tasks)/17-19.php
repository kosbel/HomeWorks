<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 30.10.2016
 * Time: 13:39
 */

$a = "77";
$b = 77;

echo "Эти две переменные: ";

if ($a == $b)
{
    var_dump($a, $b);
    echo "<br>на равность - равны;";
}
else
{
    var_dump($a, $b);
    echo "<br>на равность - не равны;";
}

echo '<br>';

if ($a === $b)
    echo "на эквивалентность - эквивалентны;";

else
    echo "на эквивалентность - не эквивалентны;";
