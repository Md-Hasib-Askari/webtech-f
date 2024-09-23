<?php
    include '../models/db_init.php';
    include '../models/employee.php';

    if (isset($_POST['submit'])) {

    }
    $db = new DBInit();
    $conn = $db->getConn();
    $emp = new Employee($conn);

    $errors = array(
        'emp_id' => '',
        'emp_name' => '',
        'emp_pass' => '',
        'emp_pass2' => ''
    );

    if(isset($_POST['emp_id']) && isset($_POST['emp_name']) && isset($_POST['emp_pass']) && isset($_POST['emp_pass2'])){
        $emp_id = $_POST['emp_id'];
        $emp_name = $_POST['emp_name'];
        $emp_pass = $_POST['emp_pass'];
        $emp_pass2 = $_POST['emp_pass2'];

        if(empty($emp_id)){
            $errors['emp_id'] = 'Employee ID is required';
        } else {
            if($emp->getEmployee($emp_id)){
                $errors['emp_id'] = 'Employee ID already exists';
            }
        }

        if(empty($emp_name)){
            $errors['emp_name'] = 'Employee Name is required';
        }

        if(empty($emp_pass)){
            $errors['emp_pass'] = 'Password is required';
        }

        if(empty($emp_pass2)){
            $errors['emp_pass2'] = 'Confirm Password is required';
        } else {
            if($emp_pass != $emp_pass2){
                $errors['emp_pass2'] = 'Passwords do not match';
            }
        }
    }