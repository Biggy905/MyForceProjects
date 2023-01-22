<?php

namespace common\enums;

enum NewsCategoryStatusEnums: string
{
    case NEWS_CATEGORY_ACTIVE = 'active';
    case NEWS_CATEGORY_NON_ACTIVE = 'non_active';
    case NEWS_CATEGORY_BLOCKING = 'blocked';
    case NEWS_CATEGORY_DELETED = 'deleted';
}
