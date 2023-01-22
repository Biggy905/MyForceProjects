<?php

?>

<?php if (!empty($item)) {?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h3"><?= $item->title?></p>
                <p class="text-justify"><?= $item->description?></p>
            </div>
        </div>
    </div>
<?php }?>
