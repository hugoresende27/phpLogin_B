<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Login</title>
</head>
<body>
    <a href="logout.php">LOGOUT</a>
    <h1>This is the index page</h1>


    <br>
    Hello, Username
</body>
</html>