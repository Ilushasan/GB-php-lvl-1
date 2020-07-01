<h1 class="title">Галерея</h1>
<div class="gallery">
    <?php
        $sql = "select * from gallery";
        $res = mysqli_query($connect, $sql);

        while($data = mysqli_fetch_assoc($res)) {
            echo "<div class='gallery-body'>
                <p class='gallery-title'>".$data['title']."</p>
                <div><a href='#' class='popup-open-".$data['id']."'><img src='".$data['path']."small/".$data['id'].".jpg'></a></div>
                <p>".$data['discript']."</p>
            </div>";
        }?>
</div>

<?
        $sql = "select * from gallery"; 
        $res = mysqli_query($connect, $sql); 
    while($data = mysqli_fetch_assoc($res)) {
        echo "<div class='popup-fade-".$data['id']." popup-fade'>
                <div class='popup-".$data['id']." popup'>
                    <div class='popup-col'>
                        <a class='popup-close' href='#'>Закрыть</a>
                        <p class='gallery-title'>".$data['title']."</p>
                        <div class='pic'><img src='".$data['path']."".$data['id'].".jpg'></div>
                    </div>
                    <p class='gallery-text'>".$data['bigdis']."</p>
                </div>
                </div>";
            }
    ?>

