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
            <th>Employee Name</th>
            <th>Leave Type</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>Casual Leave</td>
            <td>2021-01-01</td>
            <td>2021-01-02</td>
            <td>Pending</td>
            <td>Family Function</td>
        </tr>
        <tr>
            <td>Jane Doe</td>
            <td>Sick Leave</td>
            <td>2021-01-03</td>
            <td>2021-01-04</td>
            <td>Approved</td>
            <td>Fever</td>
        </tr>
    </table>
</body>
</html>