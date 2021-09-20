<?php
error_reporting(E_ALL);
require_once("vendor/autoload.php");

use App\models\PoemModel as PoemModel;

$rows = PoemModel::getList();
var_dump($rows);