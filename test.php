<?php
require_once("vendor/autoload.php");

use Faker\Factory as Faker;
use App\models\PoemModel as PoemModel;

$db = parse_url(getenv('//postgres://kkaegwqhgwgytp:9c5ff6d4472658b746f28825636db218d3e33094d060153fee0e7b3623eda7f2@ec2-54-73-58-75.eu-west-1.compute.amazonaws.com:5432/db2ll6v2e9ukh3'));

var_dump($db);