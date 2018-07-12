<?php

require __DIR__ .'/vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new FakeDataAmazon\Properties($faker));
$i = 0;
while ($i < 20) {
    echo $faker->orderId . PHP_EOL;


    $i++;
}
echo PHP_EOL;
