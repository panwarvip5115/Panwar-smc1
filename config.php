<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "panwar_smc";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Database Connection Failed");
}

?>
