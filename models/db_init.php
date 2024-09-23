<?php

class DBInit
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'emp_db';
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die('Connection failed: ' . $this->conn->connect_error);
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

    public function __destruct()
    {
        $this->conn->close();
    }

}