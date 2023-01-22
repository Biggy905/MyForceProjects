<?php

namespace common\enums;

enum DateTimeEnums: string
{
    case DATETIME_DATABASE = 'Y-m-d H:i:s';
    case DATE_DATABASE = 'Y-m-d';
    case TIME_DATABASE = 'H:i:s';
}
