<?php
include_once "FetchTrait.php";
class Database {
    use FetchTrait;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'blog_db';
    private $connection;

    public function __construct() {
        $this->connect();
        $this->createDatabaseAndTableIfNotExists();
    }

    private function connect() {
        try {
            $this->connection = new PDO("mysql:host={$this->host}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Failed to connect to the database: " . $e->getMessage());
        }
    }

    private function createDatabaseAndTableIfNotExists() {
        try {
            $sql=file_get_contents('C:\xampp\htdocs\Task2\createdatabase.sql');
            //!!!الا بعد ادخال المسار الكاملcreatedatabase.sqlعدل المسار لم يعمل معي ملف 
            $this->connection->exec($sql);
            //الغي تعليق الموجد مباشرة تحت هذا التعليق createdatabase.sqlفي حال لم يعمل معك ملف ال 
            
            /*$this->connection->exec("CREATE DATABASE IF NOT EXISTS {$this->dbname}");
            $this->connection->exec("USE {$this->dbname}");
            $this->connection->exec("
                CREATE TABLE IF NOT EXISTS posts (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    title VARCHAR(255) NOT NULL,
                    content TEXT NOT NULL,
                    author VARCHAR(100) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )
            ");*/
        } catch (PDOException $e) {
            die("Failed to create database or table: " . $e->getMessage());
        }
    }


    public function fetchAll($query, $params = []) {
        return $this->execute($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch($query, $params = []) {
        return $this->execute($query, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public function closeConnection() {
        $this->connection = null;
    }
}

?>
