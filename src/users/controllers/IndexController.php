<?php

namespace users\controllers;

use common\components\ActiveController;

final class IndexController extends ActiveController
{
    public function actionError(): string
    {
        return $this->response('404', '404');
    }
}