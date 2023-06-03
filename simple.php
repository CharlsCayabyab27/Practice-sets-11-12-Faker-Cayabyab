<?php

require ('vendor/autoload.php');

$faker = Faker\Factory::create();

echo $faker->name ."\n";
echo $faker->address . "\n";


?>