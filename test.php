<?php
require_once("vendor/autoload.php");

use Faker\Factory as Faker;
use App\models\PoemModel as PoemModel;

$rows = PoemModel::getList();
foreach ($rows as $row) {
    var_dump($row);
}