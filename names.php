<?php

require ('vendor/autoload.php');

$faker = Faker\Factory::create();

echo $faker->name() ."\n";
echo $faker->name('male')."\n";
echo $faker->name('female')."\n";

echo $faker->firstName() . "\n";
echo $faker->name($gender='male')."\n";
echo $faker->name($gender='female')."\n";

?>