<?php
require "../config.php";

$login = !empty($_POST['login']) ? strip_tags($_POST['login']) : '';
$pass = !empty($_POST['pass']) ? strip_tags($_POST['pass']) : '';
$sql = "select id from users where login='$login' and pass='$pass'";
//echo $sql;
$res = mysqli_query($connect, $sql);

if(mysqli_num_rows($res)>0) {
    setcookie('login',$login);
    setcookie('pass',$pass);
    header("Location: ../index.php?success=true");
} else {
    die("Что то не так");
}