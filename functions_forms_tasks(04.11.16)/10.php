<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 10</title>
</head>
<body>
    <form action="" method="post">
        <label>
            <textarea name="text" cols="50" rows="10"><?php echo @$_POST['text']?></textarea>
        </label>

        <input type="submit" value="Рассчитать">
    </form>
</body>
</html>
<?php

function multiExplode ($delimiters, $string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

function calculationUniqueWords ($str)
{
    $str = trim($str, ". ");
    $str = mb_strtolower($str);
    $arr_str = multiExplode(array(' ', ', ', '. '), $str);

    for ($i = 0; $i < count($arr_str); $i++)
    {
        for ($j = $i + 1; $j < count($arr_str); $j++)
        {
            if ($arr_str[$i] == $arr_str[$j])
            {
                unset($arr_str[$j]);
                $arr_str = array_values($arr_str);
                $j--;
            }
        }
    }

    $sum_un_words = count($arr_str);

    return $sum_un_words;
}

if ($_POST)
{
    echo "Количесто уникальных слов = " . calculationUniqueWords($_POST['text']);
}
?>