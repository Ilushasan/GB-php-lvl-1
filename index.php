<?php
require "config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <ul class="menu-link">
            <li><a href="?mod=feedback" <?php if($_GET['mod'] == 'feedback'){
                echo "class='active'";}?>>Отзывы</a></li>
            <li><a href="?mod=gallery"<?php if($_GET['mod'] == 'gallery'){
                echo "class='active'";}?>>Галерея</a></li>
            <li><a href="?mod=reg"<?php if($_GET['mod'] == 'reg'){
                echo "class='active'";}?>>Авторизация</a></li>
        </ul>
    </div>
    <div class="wrapper">
        <?php 
        if($_GET['mod'] == 'feedback') {
            require "modules/feedback.php";
        }else if($_GET['mod'] == 'gallery') {
            require "modules/gallery.php";
        }else if($_GET['mod'] == 'reg') {
            require "modules/login.php";
        } else if($_GET['success'] == 'true') {
            require "modules/loginSuccess.php";
        }     
    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
$(document).ready(function($) {
	$('.popup-open-1').click(function() {
		$('.popup-fade-1').fadeIn();
		return false;
    });	
    $('.popup-open-2').click(function() {
		$('.popup-fade-2').fadeIn();
		return false;
    });	
    $('.popup-open-3').click(function() {
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

</script>
</body>
</html>