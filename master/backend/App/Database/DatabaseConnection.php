<?php


namespace App\Database;


use PDO;

class DatabaseConnection {

    private static $databaseConnection;

    //TODO Consider to move it to configuration
    const DSN = "mysql:host=127.0.0.1;dbname=sneakers";
    const DATABASE_USERNAME = "root";
    const DATABASE_PASSWORD = "";

    public static function getInstance() {

        if (!self::$databaseConnection) {
            self::$databaseConnection = new PDO(
                self::DSN,
                self::DATABASE_USERNAME,
                self::DATABASE_PASSWORD
            );
        }

        return self::$databaseConnection;
    }
}
