<?php

namespace common\enums;

enum NewsStatusEnums: string
{
    case NEWS_ACTIVE = 'active';
    case NEWS_NON_ACTIVE = 'non_active';
    case NEWS_BLOCKING = 'blocked';
    case NEWS_DELETED = 'deleted';
}
