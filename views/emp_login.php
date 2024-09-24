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
    <h1>Employee Login</h1>
    <hr>
    <form action="../controllers/emp_login.php" method="post">
        <input type="text" name="emp_id" placeholder="Employee ID">
        <input type="password" name="emp_pass" placeholder="Password">
        <input type="submit" value="Login">
    </form>
    <?php
        if(isset($_GET['error'])){
            echo $_GET['error'];
        }
    ?>
    <script src="../js/validation.js"></script>
    <?php include '../routes/footer.php'; ?>
</body>
</html>