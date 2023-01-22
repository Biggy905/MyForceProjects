<?php

namespace common\entities;

use common\components\db\FindTrait;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use yii\behaviors\TimestampBehavior;

final class News extends Model
{
    use FindTrait {
        FindTrait::softFind as public findTrait;
    }

    public static function tableName()
    {
        return 'news';
    }

    public function getNewsCategory()
    {
        return $this->hasOne(NewsCategory::class, ['id' => 'id_category']);
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
