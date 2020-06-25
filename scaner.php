<?php

$files = scandir("images");
//print_r($files);

for($i=2; $i <count($files); $i++):?>
    <a href="#popup-<?= $i-1 ?>" class="popup-link"><img src="images/<?= $files[$i] ?>"alt="alt" class="pic"></a>
<?php
endfor;
?>