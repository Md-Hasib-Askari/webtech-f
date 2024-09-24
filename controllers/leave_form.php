<?php
include '../models/db_init.php';
include '../models/leave_application.php';

// Initialize the variables and error flag
$empIdError = "";
$empNameError = "";
$leaveTypeError = "";
$leaveFromError = "";
$leaveToError = "";
$reasonError = "";
$error = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form inputs
    $empId = $_POST["emp_id"];
    $empName = $_POST["emp_name"];
    $leaveType = $_POST["leave_type"];
    $leaveFrom = $_POST["leave_from"];
    $leaveTo = $_POST["leave_to"];
    $reason = $_POST["reason"];

    // Validate form fields
    if (empty($empId)) {
        $empIdError = "Please fill up Employee ID";
        $error = 1;
    }

    if (empty($empName)) {
        $empNameError = "Please fill up Employee Name";
        $error = 1;
    }

    if (empty($leaveType)) {
        $leaveTypeError = "Please select leave type";
        $error = 1;
    }

    if (empty($leaveFrom)) {
        $leaveFromError = "Please select the start date of leave";
        $error = 1;
    }

    if (empty($leaveTo)) {
        $leaveToError = "Please select the end date of leave";
        $error = 1;
    }

    if (empty($reason)) {
        $reasonError = "Please provide a reason for leave";
        $error = 1;
    }

    // If no errors, insert the data into the database
    if ($error == 0) {
        // Create an instance of LeaveApplication and insert the form data
        $leaveApp = new LeaveApplication();
        $leaveApp->insertApplication($empId, $empName, $leaveType, $leaveFrom, $leaveTo, $reason);
    }
}
