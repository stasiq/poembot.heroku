<?php

namespace App\classes;

use PDO;

class Settings
{
    public static $driver = 'pgsql';
    public static $host = 'ec2-54-73-58-75.eu-west-1.compute.amazonaws.com';
    public static $db_name = 'db2ll6v2e9ukh3';
    public static $db_user = 'kkaegwqhgwgytp';
    public static $db_port = '5432';
    public static $db_pass = '9c5ff6d4472658b746f28825636db218d3e33094d060153fee0e7b3623eda7f2';
    public static $charset = 'utf8';
    public static $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
}