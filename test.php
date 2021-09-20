<?php
require_once("vendor/autoload.php");

use Faker\Factory as Faker;
use App\models\PoemModel as PoemModel;
$test = PoemModel::testBd();
var_dump($test);