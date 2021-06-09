<?php

namespace App\Models;

use App\Core\Database\Database;

class Model
{

    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

}
