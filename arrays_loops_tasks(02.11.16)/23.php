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

        <input type="submit" value="Sum number of digits">
    </form>
</body>
</html>

<?php

if ($_GET)
{
    $number = (int)$_GET['number'];

    $sum = 0;

    while ($number != 0)
    {
        $sum += $number % 10;
        $number /= 10;
    }

    echo "Sum = $sum";
}

?>