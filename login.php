<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style type="text/css">
        
        #text{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button{

            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }

        #box{

            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>


        <div id="box">
            <form method="POST" >
                <div style="font-size:20px;margin:10px; color:white">Login</div>

                    <input type="text" name="user_name"><br><br>
                    <input type="password" name="senha"><br><br>
                

                <input id="button" type="submit" value="Login"><br><br>
                <a href="signup.php">Click to Sign up</a><br><br>
            </form>
        </div>
</body>
</html>