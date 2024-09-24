<?php
    require_once '../controllers/leave_dashboard.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Dashboard</title>
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
    <?php include '../routes/nav.php'; ?>
    <h1>Leave Application Dashboard</h1>
    <hr>
    <table>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Leave Type</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Reason</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($apps as $app) { ?>
            <tr>
                <td><?php echo $app['emp_id']; ?></td>
                <td><?php echo $app['emp_name']; ?></td>
                <td><?php echo $app['leave_type']; ?></td>
                <td><?php echo $app['start_date']; ?></td>
                <td><?php echo $app['end_date']; ?></td>
                <td><?php echo $app['reason']; ?></td>
                <td><?php echo $app['status']; ?></td>
                <td>
                    <div class="action">
                        <?php if ($app['status'] == 'pending') { ?>
                            <button id="approve" onclick="setApprove(<?php echo $app['emp_id']; ?>);">Approve</button>
                            <button id="reject" onclick="setReject(<?php echo $app['emp_id']; ?>);">Reject</button>
                        <?php } else { ?>
                            <button id="view" onclick="viewDetails(<?php echo $app['emp_id']; ?>);">View Details</button>
                        <?php } ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>

    <div id="details"></div>

    <?php include '../routes/footer.php'; ?>
    <script src="../static/js/leave_dashboard.js"></script>
</body>
</html>