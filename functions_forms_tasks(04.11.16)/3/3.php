<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task #3</title>
</head>
<body>
    <form action="" method="post">
        <label>
            Указать длину слов: <input type="number" name="N">
        </label>

        <input type="submit" value="Удалить слова">
    </form>

    <p>
        <a href="file_text.txt">Проверить текст</a>
    </p>
</body>
</html>

<?php

if ($_POST)
{
    $text = file_get_contents('file_text.txt');

    $arr_text = explode(' ', $text);

    $n = $_POST['N'];

    $long_arr = count($arr_text);

    for ($i = 0; $i < $long_arr; $i++)
    {
        if (mb_strlen($arr_text[$i], 'UTF-8') > $n)
        {
            unset($arr_text[$i]);
        }
    }

    $arr_text = array_values($arr_text);
    $text_new = implode(' ', $arr_text);

    $f = fopen('file_text.txt', 'w');
    fwrite($f, $text_new);
    fclose($f);
}

?>