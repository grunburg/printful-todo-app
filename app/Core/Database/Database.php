<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Database
{

    private string $host = '127.0.0.1';
    private string $name = 'todo';
    private string $username = 'root';
    private string $password = 'password';

    private PDO $connection;

    public function __construct()
    {

        try {
            $this->connection = new PDO("mysql:dbname=$this->name;host=$this->host", $this->username, $this->password);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }

    }

    public function connection(): PDO
    {
        return $this->connection;
    }

}
