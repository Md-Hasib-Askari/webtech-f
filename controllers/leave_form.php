<?php
include '../model/db_init.php';

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

    if ($error == 0) {
        
        $conn = $mydb->createConObject();  
        $table = "";  //needs to be filled

        $result = $mydb->leaveForm($conn,$table,$_POST["emp_Id"],$_POST["emp_name"],$_POST["leave_type"],$_POST["leave_from"],$_POST["leave_to"],$_POST["reason"]);

        if (!$result) {
            echo "Failed.";
        } 

        $mydb->closeCon($conn); 
    } else {
        echo "**Please fill up the required fields**";
    }
}
?>