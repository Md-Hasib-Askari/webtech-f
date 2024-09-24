<?php
include '../models/db_init.php';
include '../models/employee.php';

// Initialize database and employee objects
$db = new DBInit();
$conn = $db->getConn();
$emp = new Employee($conn);

// Initialize errors array for form validation
$errors = array(
    'emp_id' => '',
    'emp_name' => '',
    'emp_pass' => '',
    'emp_pass2' => ''
);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $emp_id = $_POST['emp_id'] ?? '';
    $emp_name = $_POST['emp_name'] ?? '';
    $emp_pass = $_POST['emp_pass'] ?? '';
    $emp_pass2 = $_POST['emp_pass2'] ?? '';

    // Validate Employee ID
    if (empty($emp_id)) {
        $errors['emp_id'] = 'Employee ID is required';
    } else {
        // Check if Employee ID already exists in the database
        if ($emp->getEmployee($emp_id)) {
            $errors['emp_id'] = 'Employee ID already exists';
        }
    }

    // Validate Employee Name
    if (empty($emp_name)) {
        $errors['emp_name'] = 'Employee Name is required';
    }

    // Validate Password
    if (empty($emp_pass)) {
        $errors['emp_pass'] = 'Password is required';
    }

    // Confirm Password Validation
    if (empty($emp_pass2)) {
        $errors['emp_pass2'] = 'Confirm Password is required';
    } else {
        if ($emp_pass != $emp_pass2) {
            $errors['emp_pass2'] = 'Passwords do not match';
        }
    }

    if (!array_filter($errors)) { 
        $hashed_password = password_hash($emp_pass, PASSWORD_DEFAULT);

        $result = $emp->register($emp_id, $emp_name, $hashed_password);

        if ($result) {
            
            echo "Registration successful";
        } else {
            echo "Failed to register employee.";
        }
    } 
}
?>
