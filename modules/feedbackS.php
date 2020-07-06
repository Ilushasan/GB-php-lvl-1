<?php
require "../config.php";
if($_POST['add']) {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $text = htmlspecialchars(strip_tags($_POST['text']));
    $sql = "insert into `feedback`( `name`, `text`) VALUES ('$name','$text')";
    mysqli_query($connect, $sql);
    header("Location: http://lesson-6/?mod=feedback");
}

?>