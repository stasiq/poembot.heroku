<?php
require_once("vendor/autoload.php");
use Faker\Factory as Faker;
$faker = Faker::create('ru_RU');
echo $faker->imageUrl(640, 480, 'animals', true);