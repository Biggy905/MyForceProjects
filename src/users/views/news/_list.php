<?php
use yii\helpers\Url;
?>

<div class="container">
    <div class="row">
        <?php if (!empty($service)) {?>
            <?php foreach ($service as $item) {?>
                <div class="col-3">
                    <a href="<?= Url::to(['news/item', 'id' => $item->id])?>" class="h3"><?= $item->title?></a>
                    <p class="text-justify"><?= $item->description?></p>
                </div>
            <?php }?>
        <?php }?>
    </div>
</div>
