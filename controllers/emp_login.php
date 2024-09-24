<?php
session_start();
include '../model/db_init.php';

// Function to validate employee login
function validate_emp_login($emp_id, $emp_pass) {
    $errors = [];

    // Validate Employee ID
    if (empty($emp_id)) {
        $errors[] = "Employee ID is required.";
    }

    // Validate Password
    if (empty($emp_pass)) {
        $errors[] = "Password is required.";
    } elseif (strlen($emp_pass) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    return $errors;
}