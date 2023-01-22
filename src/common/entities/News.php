<?php

namespace common\entities;

use common\components\db\FindTrait;
use common\queries\NewsQuery;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use yii\behaviors\TimestampBehavior;

final class News extends Model
{
    use FindTrait {
        FindTrait::find as public findTrait;
    }

    public static function tableName()
    {
        return 'news';
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

    public static function find(): NewsQuery
    {
        return (new NewsQuery(get_called_class()))->andWhere(self::findTrait()->where);
    }

    public function getNewsCategory()
    {
        return $this->hasOne(NewsCategory::class, ['id' => 'id_category']);
    }
}
