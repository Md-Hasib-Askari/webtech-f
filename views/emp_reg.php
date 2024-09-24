<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Register</title>
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
    <?php include '../routes/nav.php'; ?>
    <h1>Employee Register</h1>
    <hr>
    <form action="../controllers/emp_reg.php" method="post">
        <input type="text" name="emp_id" placeholder="Employee ID">
        <input type="text" name="emp_name" placeholder="Employee Name">
        <input type="password" name="emp_pass" placeholder="Password">
        <input type="password" name="emp_pass2" placeholder="Confirm Password">
        <input type="submit" value="Register">
        <p><?php if (isset($_GET['error'])) echo $_GET['error']; ?></p>
    </form>

    <?php include '../routes/footer.php'; ?>
</body>
</html>