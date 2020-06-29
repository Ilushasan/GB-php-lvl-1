
<?php   
include "../config.php";

$action = $_GET['seen'];
$id = $_GET['id'];

if($action == "edit") {
    $seen = $_GET['seen'];
    $sql = "update gallery set seen = +1 where id = $id";
    if(mysqli_query($connect,$sql)) {
        header("Location: index.php");
    }else {
        echo "Ошибка сохранения данных";
    }
}

