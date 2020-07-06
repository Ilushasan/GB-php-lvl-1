<h1 class='title'>Отзывы</h1>
<div class='feedbacks'>
    <?php 
    $sql = "select * from feedback";
    $res = mysqli_query($connect, $sql);
    
    while($data = mysqli_fetch_assoc($res)) {
        echo "
            <div class='feedback'>
                <div class='feedback-name'><span>".$data['name']."</span></div>
                <div class='feedback-text'><p>".$data['text']."</p></div>
            </div>";
    }
    ?>
</div>

<form action="modules/feedbackS.php" method='POST'>
    <p><input type="text" name="name" placeholder="Ваше имя"></p>
    <p><textarea name="text" id="" cols="30" rows="10" placeholder="Пару слов"></textarea></p>
    <p><input type="submit" name='add' value='Добавить'></p>
</form>

