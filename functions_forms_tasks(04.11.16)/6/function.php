<?php

function loadingDir ($dir_f)
{
    $dir_file = array();

    foreach ($_FILES['photo']['name'] as $key => $item)
    {
        $dir_file[] = $dir_f . basename($_FILES['photo']['name'][$key]);
    }

    foreach ($_FILES['photo']['tmp_name'] as $key => $item)
    {
        move_uploaded_file($_FILES['photo']['tmp_name'][$key], $dir_file[$key]);
    }

    return $dir_file;
}

function resize($image, $w_o = false, $h_o = false)
{
    // Получаем размеры и тип изображения
    list($w_i, $h_i, $type) = getimagesize($image);

    // Массив с типами изображений
    $types = array("", "gif", "jpeg", "png");
    // Зная "числовой" тип изображения, узнаём название типа
    $ext = $types[$type];

    if ($ext)
    {
        // Получаем название функции, соответствующую типу, для создания изображения
        $func = 'imagecreatefrom'.$ext;
        // Создаём дескриптор для работы с исходным изображением
        $img_i = $func($image);
    }
    else
    {
        echo 'Некорректное изображение';
        return false;
    }

    /* Если указать только 1 параметр, то второй подстроится пропорционально */
    if (!$h_o)
        $h_o = $w_o / ($w_i / $h_i);

    if (!$w_o)
        $w_o = $h_o / ($h_i / $w_i);

    // Создаём дескриптор для выходного изображения
    $img_o = imagecreatetruecolor($w_o, $h_o);

    // Переносим изображение из исходного в выходное, масштабируя его
    imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i);

    // Получаем функция для сохранения результата
    $func = 'image'.$ext;

    // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
    return $func($img_o, $image);
}

//функция рассчитывает кол-во строк таблицы
function numberRow($arr)
{
    $length_arr = count($arr);

    if ($length_arr % MAX_COLS == 0)
        $row = $length_arr / MAX_COLS;
    else
        $row = (int)($length_arr / MAX_COLS + 1);

    return $row;

}

//создание таблицы в зависимости от кол-во фото
function createTable ($arr)
{
    $row = numberRow($arr);

    $number = count($arr);
    $i = $number;

    echo "<table>";

    for ($r = $row; $r > 0; $r--)
    {
        echo "<tr>";

        for ($c = 0; $c < MAX_COLS; $c++)
        {
            $key = $number - $i;
            echo "<td><img src= $arr[$key]></td>";

            $i--;

            if ($i == 0)
                break;
        }
        echo "</tr>";
    }

    echo "</table>";
}