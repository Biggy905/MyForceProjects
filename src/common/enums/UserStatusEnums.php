<?php

namespace common\enums;

enum UserStatusEnums: string
{
    case USER_ACTIVE = 'active';
    case USER_NON_ACTIVE = 'non_active';
    case USER_BLOCKING = 'blocked';
}
