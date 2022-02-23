<?php // dbh.inc.php
$serverName = "localhost";
$dBusername= "root";
$dBpassword = "mysql";
$dBname = "login_Projekt01";

$conn = mysqli_connect($serverName,$dBusername,$dBpassword,$dBname);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}