<?php
session_start();
    include("connection.php");
    include("functions.php");
    
    
    /*
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       
        //se houver algum post
        $un = $_POST['user_name'];
        $pw = $_POST['senha'];
       
        //
        if (!empty($un) && !empty($pw) && !is_numeric($un)){//se no post o nome e pass estiverem  correctos e noma é não numérico
            /////////LER NA DB//////////
            
            $query = "SELECT * FROM users WHERE userName = '$un' LIMIT 1";
            $result = mysqli_query($con,$query);
            
            if ($result){
                
                if ($result && mysqli_num_rows($result) > 0 ){//SE EXISTIR 1 RESULTADO
                    $user_data = mysqli_fetch_assoc($result);//FETCH ASSOC NO RESULT//Returns an associative array
                    
                    if($user_data['senha'] === $pw){
                        
                        $_SESSION['userr_id'] = $user_data['userr_id'];
                        header ("location: index.php");
                        die;
                    }
                }
            }
        
            echo "Wrong Login! Failed";
        }else {
            print_r($_POST);
            /////////REGISTO FALHOU////////
            echo "Wrong Login! Failed";
        }
    }

?>
*/
print_r($_SESSION);
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['senha'];
        
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
           
			//read from database
			$query = "select * from users where userName = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['senha'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
        
        
			echo "wrong username or password!";
		}
	

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