<?php

function check_login(){ //ESTA FUNÇÃO VAI VERIFICAR O LOGIN,/////////////////////

    if(isset($_SESSION['user_id'])){////////////////SE EXISTE SESSION 
        $id = $_SESSION['user_id']; //$id VAI RECEBER O VALOR DA CHAVE ['user_id']
        $query = "SELECT * FROM users WHERE user_id = $id LIMIT 1";//QUERY SELECT 

        $result = mysqli_query($con,$query);//FUNÇÃO QUERY
        if ($result && mysqli_num_rows($result) > 0 ){//SE EXISTIR 1 RESULTADO
            $user_data = mysqli_fetch_assoc($result);//FETCH ASSOC NO RESULT//Returns an associative array
            return $user_data;//RETURN COM SESSÃO INICIADA
        }
    }

    //redirect to login
    header("location: login.php");/////////////////SE NÃO HOUVER SESSION, HEADER PARA O LOGIN.PHP
    die;
}



function random_num($comp){
    $text = "";
    if ($comp < 5){
        $comp = 5;
    }
    $c = rand(4,$comp);

    for ($i=0; $i<$c; $i++){
        $text .= rand(0,9);
    }
    return $text;
}