<?php

// Open Connection 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "users";
$port = 3306;

$conn = mysqli_connect($hostname,$username,$password,$database,$port);

// Check connection 
if (!$conn){
   die("connection Faild:" . mysqli_connect_error());
}
 