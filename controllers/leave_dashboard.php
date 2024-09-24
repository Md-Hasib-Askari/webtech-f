<?php
include '../models/leave_application.php';

$leaveApp = new LeaveApplication();

if (isset($_GET['emp_id']) && isset($_GET['action'])) {
    $id = $_GET['emp_id'];
    $action = $_GET['action'];

    if ($action == 'view') {
        $leaveApp = new LeaveApplication();
        $details = $leaveApp->getApplicationDetails($id);
        echo json_encode($details);
        exit();
    }
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = $_GET['emp_id'];
    if ($action == 'approve') {
        $res = $leaveApp->changeStatus($id, 'approved');
    } else if ($action == 'reject') {
        $res = $leaveApp->changeStatus($id, 'rejected');
    }
}

$apps = $leaveApp->getApplications();
