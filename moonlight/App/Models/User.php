<?php
namespace App\Models;

use PDO;

class User extends \Core\Model
{
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM products;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getProducts($id)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM products WHERE ProductId=SH001;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getEmployee()
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM employee WHERE CustomerId=1;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
