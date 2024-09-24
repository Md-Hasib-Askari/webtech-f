<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            margin-top: 50px;
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
            margin-top: 50px;
            border: 1px solid #333;
            padding: 50px;
            border-radius: 5px;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #333;
        }
        input[type="submit"] {
            background-color: #333;
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