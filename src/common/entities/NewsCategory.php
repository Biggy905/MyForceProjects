<?php

namespace common\entities;

use common\components\db\FindTrait;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use common\queries\NewsCategoryQuery;
use yii\behaviors\TimestampBehavior;

final class NewsCategory extends Model
{
    use FindTrait {
        FindTrait::find as public findTrait;
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

    public static function find(): NewsCategoryQuery
    {
        return (new NewsCategoryQuery(get_called_class()))->andWhere(self::findTrait()->where);
    }
}
