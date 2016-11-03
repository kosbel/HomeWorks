<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<div style=" width: 150px; margin: 0 auto">
    <form action="" method="get">
        <input type="text" name="a" style="width: 30px">
        <input type="text" name="operator" style="width: 15px">
        <input type="text" name="b" style="width: 30px">
        <input type="submit" value="=">
    </form>
<?php

    switch ($_GET['operator'])
    {
        case '+':
            echo "Ответ: ";
            echo $_GET['a'] + $_GET['b'];
            break;
        case '-':
            echo "Ответ: ";
            echo $_GET['a'] - $_GET['b'];
            break;
        case '*':
            echo "Ответ: ";
            echo $_GET['a'] * $_GET['b'];
            break;
        case '/':
            if ($_GET['operator'] == '/' && $_GET['b'] == 0)
            {
                echo "Деление на 0 невозможно!";
                break;
            }

            echo "Ответ: ";
            echo $_GET['a'] / $_GET['b'];
            break;
        case '%':
            echo "Ответ: ";
            echo $_GET['a'] % $_GET['b'];
            break;
        default:
            echo "Некорректный оператор!";
            break;
    }
?>
</div>
</body>
</html>


