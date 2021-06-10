<?php

namespace App\Models;

use PDO;
use PDOStatement;

class Task extends Model
{

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

            $this->response($tasks, 200);
        } else {
            $this->response(['message' => 'Task not found.'], 404);
        }
    }

    public function insert(array $data)
    {
        $query = 'INSERT INTO tasks (name, description) VALUES (:name, :description)';

        $stmt = $this->db->connection()->prepare($query);

        //@TODO Validation

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);

        if ($stmt->execute()) {
            $this->response(['message' => 'Task was created successfully.'], 201);
        } else {
            $this->response(['message' => $stmt->errorInfo()], 400);
        }
    }

    public function update(int $id, array $data)
    {
        $query = 'UPDATE tasks SET name = :name, description = :description WHERE id = :id';

        $stmt = $this->db->connection()->prepare($query);

        //@TODO Validation

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);

        if ($stmt->execute()) {
            $this->response(['message' => 'Task was updated successfully.'], 201);
        } else {
            $this->response(['message' => $stmt->errorInfo()], 400);
        }
    }

    public function mark(int $id, array $data)
    {
        $query = 'UPDATE tasks SET completed = :completed WHERE id = :id';

        $stmt = $this->db->connection()->prepare($query);

        //@TODO Validation

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':completed', $data['completed']);

        if ($stmt->execute()) {
            $this->response(['message' => 'Task was updated successfully.'], 201);
        } else {
            $this->response(['message' => $stmt->errorInfo()], 400);
        }
    }

    public function delete(int $id)
    {
        $query = 'DELETE FROM tasks WHERE id = :id';

        $stmt = $this->db->connection()->prepare($query);

        //@TODO Validation

        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            $this->response(['message' => 'Task was deleted successfully.'], 201);
        } else {
            $this->response(['message' => $stmt->errorInfo()], 400);
        }
    }
}