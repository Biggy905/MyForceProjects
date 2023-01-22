<?php

namespace common\components\db;

use common\helpers\DateTimeHelpers;
use yii\db\ActiveQuery;

trait DeleteTrait
{
    public function softDelete(): void
    {
        $this->updateAttributes(
            [
                'deleted_at' => DateTimeHelpers::createDateTime(),
            ]
        );
    }
}