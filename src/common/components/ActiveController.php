<?php

namespace common\components;

use common\components\services\ServicesInterface;
use yii\web\Controller;

abstract class ActiveController extends Controller
{
    public function response(int $code, string $view, ServicesInterface $data): string
    {
        return $this->render($view, $data);
    }
}