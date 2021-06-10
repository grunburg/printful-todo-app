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

    /**
     * Create json response with appropriate http response status.
     *
     * @param $data
     * @param int $status
     */
    public function response($data, int $status)
    {
        /*
         * Remove the old headers if they exist for some reason
         */
        header_remove();

        http_response_code($status);

        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        echo json_encode($data);
    }

    

}
