<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Dashboard</title>
    <style>
        body {
            padding-bottom: 30px;
        }
        h1 {
            margin-top: 10px;
            text-align: center;
        }
        hr {
            width: 30%;
            margin: 0 auto;
            margin-top: 10px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            margin-top: 30px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
        }
        th {
            background-color: rgb(230, 230, 230);
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
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