<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "login_sample_db";

if (!$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)){
    die ("Falha o mysqli_connect ");
}