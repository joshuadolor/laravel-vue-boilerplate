<?php

namespace App\Enums;

enum Role: string
{
    case SUPER_ADMIN = 'super_admin';
    case ADMIN = 'admin';
    case USER = 'user';
}
