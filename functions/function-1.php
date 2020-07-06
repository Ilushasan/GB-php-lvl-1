<?php
if($_POST['count']) {
    require "function.php";
    //$res = implode(" ", array($_POST['firstNumb'], $_POST['count'], $_POST['secondNumber']))
    $res = mathOperation($_POST['firstNumb'], $_POST['secondNumber'], $_POST['count']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание номер 1</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="firstNumb">
        <select name="count" id="">
            <option value="+">Сложение</option>
            <option value="-">Вычитание</option>
            <option value="*">Умножени</option>
            <option value="/">Деление</option>
        </select>
        <input type="text" name="secondNumber">
        <input type="submit" value="=">
        <?= $res;?>
    </form>

</body>
</html>