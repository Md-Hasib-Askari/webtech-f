<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
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