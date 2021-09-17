<?php
require_once("vendor/autoload.php");
use Faker\Factory as Faker;
use App\models\PoemModel as PoemModel;
$row =  PoemModel::getItem('sad');
echo $row[0] . $row[1];
$faker = Faker::create();
?>
<!--<img src="--><?//=$faker->imageUrl(640, 480, 'animals')?><!--" alt="">-->