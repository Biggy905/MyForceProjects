<?php

namespace common\enums;

enum UsersPermissionsEnums: string
{
    case MANAGER_ADMIN = 'manage_admin';
    case MANAGER_USER = 'view_site';
}