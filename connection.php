<?php

$servername = "localhost";
$serverusername = "root";
$serverpassword = "";
$dbname = "cv_maker";

$conn= mysqli_connect($servername,$serverusername, $serverpassword, $dbname);

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}