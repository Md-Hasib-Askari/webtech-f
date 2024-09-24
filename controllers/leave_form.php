<?php
include '../models/db_init.php';
include '../models/leave_application.php';

// Initialize the variables and error flag
$errors = array();

$response = array(
    "status" => NULL,
    "message" => NULL,
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form inputs
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $empId = isset($data["emp_id"]) ? $data["emp_id"] : "";
    $empName = isset($data["emp_name"]) ? $data["emp_name"] : "";
    $leaveType = isset($data["leave_type"]) ? $data["leave_type"] : "";
    $leaveFrom = isset($data["leave_from"]) ? $data["leave_from"] : "";
    $leaveTo = isset($data["leave_to"]) ? $data["leave_to"] : "";
    $reason = isset($data["reason"]) ? $data["reason"] : "";

    // Validate form fields
    if (empty($empId)) {
        array_push($errors, "Please fill up Employee ID");
    }

    if (empty($empName)) {
        array_push($errors, "Please fill up Employee Name");
    }

    if (empty($leaveType)) {
        array_push($errors, "Please select leave type");
    }

    if (empty($leaveFrom)) {
        array_push($errors, "Please select start date of leave");
    }

    if (empty($leaveTo)) {
        array_push($errors, "Please select end date of leave");
    }

    if ($leaveFrom > $leaveTo) {
        array_push($errors, "Start date cannot be greater than end date");
    }

    if (empty($reason)) {
        array_push($errors, "Please provide a reason for leave");
    }

    // If no errors, insert the data into the database
    if (count($errors) == 0) {
        // Create an instance of LeaveApplication and insert the form data
        $leaveApp = new LeaveApplication();
        $res = $leaveApp->insertApplication($empId, $empName, $leaveType, $leaveFrom, $leaveTo, $reason);
        if ($res) {
            // If the data is inserted successfully, display success message
            $response["status"] = "success";
            $response["message"] = "Leave application submitted successfully";
            $res = json_encode($response);
            echo $res;
        } else {
            // If the data is not inserted, display error message
            $response["status"] = "error";
            $response["message"] = ["Failed to submit leave application"];
            $res = json_encode($response);
            echo $res;
        }
    } else {
        // If there are errors, display them
        $response["status"] = "error";
        $response["message"] = $errors;
        $res = json_encode($response);
        echo $res;
    }
}
