<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum number</title>
</head>
<body>
<form action="" method="get">
    <label for="E_number">Enter number:</label>
    <input type="number" id="E_number" name="number">

    <label for="E_numeral">Enter numeral</label>
    <input type="number" id="E_numeral" name="numeral">

    <input type="submit" value="Sum number of digits">
</form>
</body>
</html>

<?php

if ($_GET)
{
    $number = $_GET['number'];
    $numeral = $_GET['numeral'];

    $quantity = 0;

    for ($i = 0; $i < strlen($number); $i++)
    {
        if ($numeral == $number[$i])
            $quantity++;
    }

    echo "Quantity = $quantity";
}

?>