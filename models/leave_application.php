<?php

include 'db_init.php';

class LeaveApplication {
    private $conn;

    public function __construct() {
        $db = new DBInit();
        $this->conn = $db->getConn();
    }

    public function insertApplication($emp_id, $emp_name, $leave_type, $start_date, $end_date, $reason) {
        $sql = "INSERT INTO leave_applications (emp_id, emp_name, leave_type, start_date, end_date, reason, status) VALUES ('$emp_id', '$emp_name', '$thisleave_type', '$start_date', '$end_date', '$reason', 'pending')";
        $res = $conn->query($sql);
        if ($res === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function getApplications() {
        $sql = "SELECT * FROM leave_applications";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            $rows = [];
            while($row = $res->fetch_assoc()) {
                $rows.push($row);
            }
            return $rows;
        } else {
            return [];
        }
    }

    public function changeStatus($id, $status) {
        $sql = "UPDATE leave_applications SET status='$status' WHERE emp_id='$id'";
        $res = $conn->query($sql);
        return $res;
    }
}