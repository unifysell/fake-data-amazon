<?php

namespace FakeDataAmazon;

/**
 * Provider for the Faker generator
 */
class Properties extends \Faker\Provider\Base
{
    public static function orderId()
    {
        return \random_int(100, 999) . '-' . \random_int(1000000, 9999999) . '-' . \random_int(1000000, 9999999);
    }
}
