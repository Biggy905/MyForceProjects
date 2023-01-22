<?php
namespace common\enums;

enum NewsFiltersAttrEnums: string
{
    case ATTR_ID = 'id';
    case ATTR_TITLE = 'title';
    case ATTR_DESCRIPTION = 'description';
    case ATTR_STATUS = 'status';
    case ATTR_DATE = 'created_at';
}