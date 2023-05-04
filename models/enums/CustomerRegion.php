<?php

namespace app\models\enums;

enum CustomerRegion: int
{
    case EUW = 1;
    case EUNE = 2;
    case NA = 3;

    public function getDescription(): string
    {
        return match ($this) {
            self::EUW => 'Europe West',
            self::EUNE => 'Europe Nordic & East',
            self::NA => 'North America',
        };
    }
}
