<?php

namespace app\models\factories;

use app\models\Customer;
use app\models\enums\CustomerRegion;
use Faker\Factory;

class CustomerFactory
{
    /**
     * Create a fake Customer model.
     * @param array $attributes
     * @return Customer
     */
    public static function create(array $attributes = []): Customer
    {
        $faker = Factory::create();

        $customer = new Customer();
        $customer->name = $attributes['name'] ?? $faker->company;
        $customer->region = $attributes['region'] ?? CustomerRegion::getRandomValue();
        $customer->currency = $attributes['group'] ?? 'EUR'; // TODO: make it dynamic

        return $customer;
    }
}