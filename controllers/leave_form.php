<?php
include '../models/db_init.php';
include '../model/leave_application.php';

$empId = "";
$empName = "";
$leaveType = "";
$leaveFrom = "";
$leaveTo = "";
$reason = "";
$error = 0;

if (isset($_POST["Submit"])) {
    if (empty($_POST["emp_Id"])) {
        $empId = "Please Fill up employee ID";
        $error = 1;
    }

    if (empty($_POST["emp_name"])) {
        $empName = "Please Fill up employee Name";
        $error = 1;
    }

    if (empty($_POST["leave_type"])) {
        $leaveType = "Please select leave type";
        $error = 1;
    }

    if (empty($_POST["leave_from"])) {
        $leaveFrom = "Fill up your date of leave";
        $error = 1;
    }

    if (empty($_POST["leave_to"])) {
        $leaveTo = "Fill up ";
        $error = 1;
    }


    if (empty($_POST["reason"])) {
        $reason = "Please provide a reason for leave";
        $error = 1;
    }
}
?>