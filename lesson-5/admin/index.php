<?php
include "../config.php";

$sql_small = "select * from gallery where path = '../images/small' order by seen desc";
$sql_big = "select * from gallery where path = '../images/big'";

$res_small = mysqli_query($connect, $sql_small);
$res_big = mysqli_query($connect, $sql_big);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
    <? while($data = mysqli_fetch_assoc($res_small)) {
        echo $pic = "<div><a href='server.php?action=edit&id=".$data['id']."'  onclick = 'f(".$data['id'].")' class='popup-open-".$data['id']."'><img src='".$data['path']."/".$data['name'].".jpg' alt='alt' class='pic'></a>
        <p>Просмотров <span id=".$data['id'].">".$data['seen']."</span></p></div>";
}?>
    </div>
    <? while($data = mysqli_fetch_assoc($res_big)) {
        echo $pic = "<div class='popup-fade-".$data['id']." popup-fade'>
                    <div class='popup-".$data['id']." popup'>
                    <a class='popup-close' href='#'>Закрыть</a>
                    <img src='".$data['path']."/".$data['name'].".jpg' alt='alt' class='popup-pic'>
                    </div></div>";

        }?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function($) {
	$('.popup-open-5').click(function() {
		$('.popup-fade-1').fadeIn();
		return false;
    });	
    $('.popup-open-6').click(function() {
		$('.popup-fade-2').fadeIn();
		return false;
    });	
    $('.popup-open-7').click(function() {
		$('.popup-fade-3').fadeIn();
		return false;
    });	
    $('.popup-open-8').click(function() {
		$('.popup-fade-4').fadeIn();
		return false;
	});	
	
	$('.popup-close').click(function() {
		$(this).parents('.popup-fade').fadeOut();
		return false;
	});		

	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-fade-1').fadeOut();
		}
	});
	
	$('.popup-fade').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
			$(this).fadeOut();					
		}
	});
});

function f(id) {       
        let seen = document.getElementById(id).textContent;
        console.log(seen);
        let str = "action=edit&seen="+seen+"&id="+id;
        console.log(str);

        $.ajax({
            type:"GET",
            url: "server.php",
            data:str,
            success: function(answer) {
                alert(answer);
            },
        });
    }
</script>
</body>
</html>




