<?php
namespace core;

use \src\Config;

class Database {
    private static $_pdo;

    public static function getInstance() {
        if (!isset(self::$_pdo)) {
            try {
                self::$_pdo = new \PDO(
                    Config::DB_DRIVER . ":dbname=" . Config::DB_DATABASE . ";host=" . Config::DB_HOST,
                    Config::DB_USER,
                    Config::DB_PASS,
                    [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    ]
                );
            } catch (\PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }
        return self::$_pdo;
    }

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {}
}
