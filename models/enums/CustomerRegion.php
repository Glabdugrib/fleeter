<?php

namespace app\models\enums;

use app\models\traits\RandomCaseTrait;

enum CustomerRegion: int
{
    use RandomCaseTrait;

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
