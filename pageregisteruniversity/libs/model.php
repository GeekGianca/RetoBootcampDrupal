<?php
require_once 'config/database.php';
class Model{

    public function __construct()
    {
        $this->db = new Database();
    }
}