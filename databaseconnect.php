<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "SBS";

$connection = new mysqli($servername,$username,$password,$database);
if($connection->connect_error !=0){
    die("Connection failed". $connection->connect_error);
}

?>