<?php

namespace App\Models;

use App\Core\Database\Database;
use PDO;
use PDOStatement;

class Task
{

    private Database $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function all()
    {
        $query = 'SELECT * FROM tasks';

        $stmt = $this->db->connection()->prepare($query);
        $stmt->execute();

        $this->show($stmt);
    }

    public function find(int $id)
    {
        $query = "SELECT * FROM tasks WHERE id = :id";

        $stmt = $this->db->connection()->prepare($query);
        $stmt->execute(['id' => $id]);

        $this->show($stmt);
    }

    public function show(PDOStatement $stmt)
    {
        $num = $stmt->rowCount();

        if ($num > 0) {
            $tasks['data'] = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                /**
                 * @var int $id
                 * @var string $name
                 * @var string $description
                 * @var boolean $completed
                 * @var string $created_at
                 */

                $item = [
                    'id' => $id,
                    'name' => $name,
                    'description' => $description,
                    'completed' => $completed,
                    'created_at' => $created_at,
                ];

                array_push($tasks['data'], $item);
            }

            print_r(json_encode($tasks));
            http_response_code(200);
        } else {
            print_r(json_encode(['message' => 'Not Found']));
            http_response_code(404);
        }
    }
}