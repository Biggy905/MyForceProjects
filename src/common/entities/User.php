<?php

namespace common\entities;

use common\components\db\FindTrait;
use common\components\Model;
use common\helpers\DateTimeHelpers;
use common\queries\UserQuery;
use yii\behaviors\TimestampBehavior;

final class User extends Model
{
    use FindTrait {
        FindTrait::find as public findTrait;
    }

    public static function tableName()
    {
        return 'users';
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

    public static function find(): UserQuery
    {
        return (new UserQuery(get_called_class()))->andWhere(self::findTrait()->where);
    }
}
