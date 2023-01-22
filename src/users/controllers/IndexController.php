<?php

namespace users\controllers;

use common\components\ActiveController;

final class IndexController extends ActiveController
{
    public function actionIndex(): string
    {
        return $this->render('_index');
    }

    public function actionError(): string
    {
        return $this->response('404', '404');
    }
}