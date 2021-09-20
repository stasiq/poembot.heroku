<?php

namespace App\classes;

use App\classes\Settings as Settings;
use PDO;

class Db
{
    public static $db = parse_url(getenv('//postgres://kkaegwqhgwgytp:9c5ff6d4472658b746f28825636db218d3e33094d060153fee0e7b3623eda7f2@ec2-54-73-58-75.eu-west-1.compute.amazonaws.com:5432/db2ll6v2e9ukh3')):
    private static $instance = null;

    static function getConnect()
    {
        if (is_null(self::$instance)) {
            $driver = Settings::$driver;
            $host = Settings::$host;
            $db_name = Settings::$db_name;
            $db_user = Settings::$db_user;
            $db_pass = Settings::$db_pass;
            $charset = Settings::$charset;
            $options = Settings::$options;
            $instance = self::$instance;
            $instance = new self();
            $instance::$db = new PDO("$driver:host=$host;dbname=$db_name;", $db_user, $db_pass, $options);
        }
        return $instance::$db;
    }
}
