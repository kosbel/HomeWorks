<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="photo[]" multiple>

    <input type="submit">
</form>


</body>
</html>

<?php

//подключаем функции
require_once ("function.php");

$main_dir = "gallery/";

//максимальное кол-во колонок
const MAX_COLS = 3;

//получение массива загруженных фото
$arr_photo = loadingDir($main_dir);

//изменение размера фото
foreach ($arr_photo as $item)
    resize($item, 200, 200);

//создание таблицы
createTable($arr_photo);

?>