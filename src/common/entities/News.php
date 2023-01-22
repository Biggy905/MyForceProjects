<?php

namespace common\entities;

use common\components\Model;

final class News extends Model
{
    public static function tableName()
    {
        return 'news';
    }
}
