<?php

namespace common\entities;

use common\components\Model;

final class User extends Model
{
    public static function tableName()
    {
        return 'users';
    }
}