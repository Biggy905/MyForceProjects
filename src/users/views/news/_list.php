<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="container">
    <div class="row">
        <?php if (!empty($service)) {?>
            <?php foreach ($service as $item) {?>
                <div class="col-3">
                    <a href="<?= Url::to(['news/item', 'id' => $item->id])?>" class="h4">
                        <?= Html::encode($item->title);?>
                    </a>
                    <p class="text-justify"><?= Html::encode(mb_strimwidth($item->description, 0, 200, '...'))?></p>
                </div>
            <?php }?>
            <div class="">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        <?php }?>
    </div>
</div>
