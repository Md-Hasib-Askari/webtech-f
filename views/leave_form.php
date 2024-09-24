<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Form</title>
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
    <?php include '../routes/nav.php'; ?>
    
    <h1>Leave Application Form</h1>
    <hr>
    
    <form action="../controllers/leave_form.php" method="post">
        <label for="emp_id">Employee ID:</label>
        <input type="text" name="emp_id" id="emp_id" placeholder="Employee ID" required>

        <label for="emp_name">Employee Name:</label>
        <input type="text" name="emp_name" id="emp_name" placeholder="Employee Name" required>

        <label for="leave_type">Leave Type:</label>
        <!-- Dropdown (select) for leave type -->
        <select name="leave_type" id="leave_type" required>
            <option value="" disabled selected>Select Leave Type</option>
            <option value="Marital Leave">Marital Leave</option>
            <option value="Sick Leave">Sick Leave</option>
            <option value="Family Issue">Family Issue</option>
        </select>

        <label for="leave_from">Start Date:</label>
        <input type="date" name="leave_from" id="leave_from" required>

        <label for="leave_to">End Date:</label>
        <input type="date" name="leave_to" id="leave_to" required>

        <label for="reason">Reason for Leave:</label>
        <textarea name="reason" rows="5" id="reason" placeholder="Reason" required></textarea>

        <input type="submit" value="Apply">
    </form>

    <?php include '../routes/footer.php'; ?>
</body>
</html>
