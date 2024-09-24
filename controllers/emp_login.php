<?php
session_start();
include '../model/db_init.php';

    $idErr = "";
    $passErr = "";
    if(isset($_POST['submit'])){
        $empId = $_POST['emp_id'];
        $empPass = $_POST['emp_name'];

        if(empty($empId)){
            $idErr = "ID is required";
        }

        if(empty($empPass)){
            $passErr = " Password is required";
        }
    }



?>