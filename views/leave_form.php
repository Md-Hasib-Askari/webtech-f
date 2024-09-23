<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        form {
            display: flex;
            flex-direction: column;
            width: 30%;
            margin: 0 auto;
            margin-top: 30px;
            border: 1px solid #333;
            padding: 50px;
            border-radius: 5px;
            margin-bottom: 50px;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #333;
        }
        input[type="submit"] {
            background-color: rgb(76, 175, 80);
            border: none;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php include '../routes/nav.php'; ?>
    <h1>Leave Application Form</h1>
    <hr>
    <form action="../controllers/leave_form.php" method="post">
        <label for="emp_id">Employee ID:</label>
        <input type="text" name="emp_id" id="emp_id" placeholder="Employee ID">
        <label for="emp_id">Employee Name:</label>
        <input type="text" name="emp_name" id="emp_name" placeholder="Employee Name">
        <label for="emp_id">Leave Type:</label>
        <input type="text" name="leave_type" id="leave_type" placeholder="Leave Type">
        <label for="emp_id">Start Date:</label>
        <input type="date" name="leave_from" id="leave_from" placeholder="Leave From">
        <label for="emp_id">End Date:</label>
        <input type="date" name="leave_to" id="leave_to" placeholder="Leave To">
        <label for="emp_id">Reason for Leave:</label>
        <textarea type="text" name="reason" rows="5" id="reason" placeholder="Reason"></textarea>
        <input type="submit" value="Apply">
    </form>

    <?php include '../routes/footer.php'; ?>
    
</body>
</html>