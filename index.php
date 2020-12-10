<?php

# When installed via composer
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name;
