    
<?php 
    $popupPic = scandir("images");

    for($i=2; $i <count($popupPic); $i++):?>
    <div id="popup-<?=$i-1?>" class="popup">
		<div class="popup__body">
			<div class="popup__content">
				<a href="#header" class="popup__close close-popup">X</a>
				<div class="popup__title">Модальное окно <?=$i-1?></div>
				<div class="popup__image">
					<img src="images/<?= $i-1?>.jpg" alt="">
				</div>
			</div>
		</div>
    </div>
<?php
endfor;
?>