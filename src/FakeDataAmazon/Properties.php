<?php

namespace FakeDataAmazon;

/**
 * Provider for the Faker generator
 */
class Properties extends \Faker\Provider\Base
{
    public static function amazonOrderId()
    {
        $lowProbability = parent::numberBetween(0, 100);
        $pattern = '###-#######-#######';
        if ($lowProbability > 80) {
            $pattern = 'S##-#######-#######';
        }
        return parent::numerify($pattern);
    }
}
