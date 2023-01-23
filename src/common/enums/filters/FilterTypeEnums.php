<?php

namespace common\enums\filters;

enum FilterTypeEnums: string
{
    case TYPE_TEXT = 'text';
    case TYPE_NUMERICAL = 'numerical';
    case TYPE_CATEGORY = 'category';
    case TYPE_DATE = 'date';
}
