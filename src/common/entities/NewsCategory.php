<?php

namespace common\entities;

use common\components\Model;

final class NewsCategory extends Model
{
    public static function tableName()
    {
        return 'news_category';
    }
}
