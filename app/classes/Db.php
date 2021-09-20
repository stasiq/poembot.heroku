<?php

namespace App\classes;

use App\classes\Settings as Settings;
use PDO;

class Db
{
    public static $db = null;
    private static $instance = null;

    static function getConnect()
    {
        self::$db = parse_url(getenv("postgres://kkaegwqhgwgytp:9c5ff6d4472658b746f28825636db218d3e33094d060153fee0e7b3623eda7f2@ec2-54-73-58-75.eu-west-1.compute.amazonaws.com:5432/db2ll6v2e9ukh3"));

        $pdo = new PDO("pgsql:" . sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            self::$db["host"],
            self::$db["port"],
            self::$db["user"],
            self::$db["pass"],
            ltrim(self::$db["path"], "/")
          ));
        return $pdo;
    }
}
