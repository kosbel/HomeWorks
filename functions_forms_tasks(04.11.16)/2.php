<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task #2</title>
</head>
<body>
    <form action="" method="post">
        <label>
            Введите текст:<textarea name="text"></textarea>
        </label>

        <input type="submit" value="Получить ТОП 3 длинных слов">
    </form>
</body>
</html>


<?php

if ($_POST)
{
    function getThreeLongWords($arr)
    {
        $result = array();
        for ($i = 0; $i < count($arr); $i++)
        {
            for ($j = $i + 1; $j < count($arr); $j++)
            {
                if (count($arr[$j]) > count($arr[$i]))
                {

                }
            }
        }
    }

    $arr_str = explode(' ', $_POST['text']);

    getThreeLongWords($arr_str);
}

?>