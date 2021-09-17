<?php
require_once("vendor/autoload.php");

use Faker\Factory as Faker;
use App\models\PoemModel as PoemModel;

$row = PoemModel::getItem('sad');
echo $row[0] . $row[1];
$faker = Faker::create();