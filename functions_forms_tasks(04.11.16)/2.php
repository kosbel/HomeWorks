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
        $arr_result = array();

        for ($i = 0; $i < 3; $i++)
        {
            $max_long = 0;
            $key = 0;
            for ($j = 0; $j < count($arr); $j++)
            {
                if (strlen($arr[$j]) > $max_long)
                {
                    $max_long = strlen($arr[$j]);
                    $key = $j;
                }
            }

            $arr_result[] = $arr[$key];
            unset($arr[$key]);
            $arr = array_values($arr);
        }

        return $arr_result;
    }

    $arr_str = explode(' ', $_POST['text']);

    $arr_long_words = getThreeLongWords($arr_str);

    echo "Самые длинные слова: ";
    foreach ($arr_long_words as $word)
        echo $word . ' ';
}

?>