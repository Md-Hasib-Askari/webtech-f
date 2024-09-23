<?php

class Employee
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function register($emp_id, $emp_name, $emp_pass)
    {
        $sql = "INSERT INTO employee (emp_id, emp_name, emp_pass) VALUES ('$emp_id', '$emp_name', '$emp_pass')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        }
        return false;
    }

    public function login($emp_id, $emp_pass)
    {
        $sql = "SELECT * FROM employee WHERE emp_id = '$emp_id' AND emp_pass = '$emp_pass'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return true;
        }
        return false;
    }

    public function getEmployee($emp_id)
    {
        $sql = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return false;
    }

    public function getEmployees() {
        $sql = "SELECT * FROM employee";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $employees = array();
            while($row = $result->fetch_assoc()) {
                $employees[] = $row;
            }
            return $employees;
        }
        return false;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}