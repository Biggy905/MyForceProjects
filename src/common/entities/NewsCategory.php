<?php

namespace common\entities;

use common\components\db\FindTrait;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use yii\behaviors\TimestampBehavior;

final class NewsCategory extends Model
{
    use FindTrait {
        FindTrait::softFind as public findTrait;
    }

    public static function tableName()
    {
        return 'news_categories';
    }

    public function behaviors(): array
    {
        return [
            'DefaultTimestampBehaviour' => [
                'class' => TimestampBehavior::class,
                'value' => DateTimeHelpers::createDateTime(),
            ],
        ];
    }
}
