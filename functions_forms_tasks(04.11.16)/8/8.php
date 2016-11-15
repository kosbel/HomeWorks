<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 8</title>
</head>
<body>

    <div style="width: 900px; margin: 0 auto;">
    <?php

    if (count($_POST) == 2)
    {
        $f_cl = fopen("comments.txt", 'w');
        fclose($f_cl);
    }
    else
    {
        require_once ('functions.php');

        $text_comment = strip_tags($_POST['comment'], "<b>");

        if (filterMats($text_comment))
            $text_comment = "В вашем комментарии МАТ!";

        addCommentsTxt($text_comment);

        $text = file_get_contents('comments.txt');

        echo $text;
    }

    ?>

    <form action="" method="post" style="width: 400px; margin: 0 auto;">
        <label>
            Комментарий:<br>
            <textarea name="comment" cols="50" rows="10"></textarea>
        </label>

        <p><input type="submit"></p>
        <p><button type="submit" name="delete" value="" style="height: 20px">Удалить все комментарии</p>
    </form>

    </div>

</body>
</html>

