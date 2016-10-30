<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 30.10.2016
 * Time: 14:33
 */

$a = 20;
$b = 0;
$c = -20;

/**
 * результатом будет false, если исходное значение равно 0.
 * В остальных случаях результатом будет true.
 */
var_dump((bool)$a, (bool)$b, (bool)$c);// a = true, b = false, c = true