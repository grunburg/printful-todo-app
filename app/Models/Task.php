<?php

namespace App\Models;

use App\Core\Database\Database;
use PDO;
use PDOStatement;

class Task
{

    public static function all()
    {
        $db = new Database();

        $query = 'SELECT * FROM tasks';

        $stmt = $db->connection()->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public static function find(int $id)
    {
        $db = new Database();

        $query = 'SELECT * FROM tasks WHERE id = :id';

        $stmt = $db->connection()->prepare($query);
        $stmt->execute(['id' => $id]);

        return $stmt;
    }

    public static function fetch(PDOStatement $stmt)
    {
        $num = $stmt->rowCount();

        if ($num > 0) {
            $tasks['data'] = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $item = [
                    'id' => $id,
                    'name' => $name,
                    'description' => $description,
                    'completed' => $completed,
                    'created_at' => $created_at,
                ];

                array_push($tasks['data'], $item);
            }

            echo json_encode($tasks);
            http_response_code(200);
        } else {
            echo json_encode(['message' => 'Not Found']);
            http_response_code(404);
        }
    }
}