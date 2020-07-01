<?php
if($_POST['count']){
    require "function.php";
    $res = mathOperation($_POST['firstNumb'], $_POST['secondNumber'], $_POST['count']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание номер 2</title>
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <input type="text" name="firstNumb">
        <input type="submit" value="+" name="count">
        <input type="submit" value="-" name="count">
        <input type="submit" value="*" name="count">
        <input type="submit" value="/" name="count">
        <input type="text" name="secondNumber"> 
    </form>
    <div class="res"><?= $res?></div>
    </div>

</body>
<style>
    .container {
        max-width: 460px;
        margin: 0 auto;
    }

    .res{
        border: 1px solid black;
        text-align:center;
        font-size: 20px;
    }
</style>
</html>