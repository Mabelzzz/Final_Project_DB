<?php
namespace Core;
ini_set('display_errors',1);
error_reporting(E_ALL);
use PDO;
use App\Config;

abstract class Model
{
    protected static function getDB() {
        static $db=null;

        if ($db===null) {
            $dsn = "mysql:host=". Config::DB_HOST. ";dbname=". Config::DB_NAME.";charset=utf8mb4";
            $db=new PDO($dsn, Config::DB_USER,Config::DB_PASSWORD);
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        return $db;
    }
}


?>