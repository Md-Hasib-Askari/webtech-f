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
    
    <form id="leave_form">
        <label for="emp_id">Employee ID:</label>
        <input type="text" name="emp_id" id="emp_id" placeholder="Employee ID" >

        <label for="emp_name">Employee Name:</label>
        <input type="text" name="emp_name" id="emp_name" placeholder="Employee Name" >

        <label for="leave_type">Leave Type:</label>
        <select name="leave_type" id="leave_type" >
            <option value="" disabled selected>Select Leave Type</option>
            <option value="Marital Leave">Marital Leave</option>
            <option value="Sick Leave">Sick Leave</option>
            <option value="Family Issue">Family Issue</option>
        </select>

        <label for="leave_from">Start Date:</label>
        <input type="date" name="leave_from" id="leave_from" >

        <label for="leave_to">End Date:</label>
        <input type="date" name="leave_to" id="leave_to" >

        <label for="reason">Reason for Leave:</label>
        <textarea name="reason" rows="5" id="reason" placeholder="Reason" ></textarea>

        <input type="submit" value="Submit Application">

        <div id="error_message"></div>
        <div id="success_message"></div>
    </form>

    <?php include '../routes/footer.php'; ?>

    <script src="../static/js/leave_form.js"></script>
</body>
</html>
