<?php

namespace App\Config;

use PDO;

class Database
{
    private static ?PDO $instance = null;
    private static string $dbPath;

    public static function init(string $dbPath): void
    {
        self::$dbPath = $dbPath;
        self::$instance = null; // Reset instance on init
    }

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $dsn = "sqlite:" . self::$dbPath;

            try {
                self::$instance = new PDO($dsn);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }

        return self::$instance;
    }

    public static function createTables(): void
    {
        $db = self::getInstance();
        $commands = [
            'CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                email TEXT NOT NULL UNIQUE,
                password TEXT NOT NULL,
                role TEXT NOT NULL,
                status TEXT NOT NULL DEFAULT "active"
            )'
        ];

        foreach ($commands as $command) {
            $db->exec($command);
        }
    }

    public static function clearDatabase(): void
    {
        if (file_exists(self::$dbPath)) {
            unlink(self::$dbPath);
        }
        // After deleting, we need to nullify the instance to force re-connection
        self::$instance = null;
        // Re-create the tables
        self::createTables();
    }
}