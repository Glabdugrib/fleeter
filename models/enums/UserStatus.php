<?php

namespace app\models\enums;

enum UserStatus: int
{
    case INACTIVE = 1;
    case ACTIVE = 2;
    case DELETED = 3;

    public function getDescription(): string
    {
        return match ($this) {
            UserStatus::INACTIVE => 'Inactive',
            UserStatus::ACTIVE => 'Active',
            UserStatus::DELETED => 'Deleted',
        };
    }
}
