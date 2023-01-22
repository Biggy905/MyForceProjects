<?php

namespace console\controllers;

use common\entities\User;
use yii\console\Controller;
use Yii;

final class TestController extends Controller
{
    public function actionTest()
    {
        $query = User::find()->all();

        var_dump($query);
        die;
    }
}