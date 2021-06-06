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

    public function connection(): ?PDO
    {
        $connection = null;

        try {
            $connection = new PDO("mysql:dbname=$this->name;host=$this->host", $this->username, $this->password);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }

        return $connection;
    }



}