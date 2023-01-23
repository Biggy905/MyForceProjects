<?php

use yii\helpers\Html;

if (!empty($data) && is_array($data)) {
    $code = $data['code'];
    $message = $data['message'];
    $title = $data['title'];
?>
<div class="site-error">

    <h1><?= Html::encode($data['code']) ?>: <?=Html::encode($title)?></h1>

    <div class="alert alert-danger">
        <?= Html::encode($message)?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
<?php } else {?>
    <div class="">
        <p>Не найдены Exception!</p>
    </div>
<?php }?>
