<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 7</title>
</head>
<body>

<?php

if ($_POST)
{
    $text_comment = $_POST['comment'];

    $f = fopen('comments.txt', 'a');
    fwrite($f, "<p style=\"width: 400px; margin: 0 auto;\">" . $text_comment . "</p>" . PHP_EOL . PHP_EOL);
    fclose($f);

    $text = file_get_contents('comments.txt');

    echo $text;
}

?>

<form action="" method="post" style="width: 400px; margin: 0 auto;">
    <label>
        <p>Комментарий:</p>
        <textarea name="comment" cols="50" rows="10"></textarea>
    </label>

    <p><input type="submit"></p>
</form>

</body>
</html>

