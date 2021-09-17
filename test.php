<?php
require_once("vendor/autoload.php");
use Faker\Factory as Faker;
$faker = Faker::create();
?>
<img src="<?=$faker->imageUrl(640, 480, 'animals')?>" alt="">