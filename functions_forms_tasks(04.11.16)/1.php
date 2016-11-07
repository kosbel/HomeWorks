<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task #1</title>
</head>
<body>
    <form action="" method="post">
        <label>
            Текст 1:<textarea name="text1"></textarea>
        </label>
        <label>
            Текст 2:<textarea name="text2"></textarea>
        </label>

        <input type="submit" value="Получить общие слова">
    </form>
</body>
</html>

<?php

if ($_POST)
{
    function getCommonWords($a, $b)
    {
        $arr_a = explode(' ', $a);
        $arr_b = explode(' ', $b);

        $result = array_intersect($arr_a, $arr_b);

        return $result;
    }

    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];

    $arr = getCommonWords($text1, $text2);

    if ($arr)
    {
        echo "Общие слова: ";
        foreach ($arr as $value)
            echo $value . " ";
    }
    else
        echo "Общих слов нет!";
}

?>

