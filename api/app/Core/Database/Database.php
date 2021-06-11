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

    private string $table = 'create_tasks_table';

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

    public function createTable()
    {
        $file = file_get_contents(ROOT . '/database/' . $this->table . '.sql');
        $this->connection()->query($file);
    }

}
