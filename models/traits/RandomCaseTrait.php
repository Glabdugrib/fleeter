<?php

namespace app\models\traits;

trait RandomCaseTrait
{
    /** Method to return a random case value */
    public static function getRandomValue()
    {
        $values = array_column(self::cases(), 'value');
        return $values[array_rand($values)];
    }
}