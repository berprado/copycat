<?php
$server = "localhost";
$user = "root";
$pass = "";
// create database first
$database = "yt_test"; 
$con = mysqli_connect($server, $user, $pass);
if(!$con){
    echo 'Server not connected';
}
$db = mysqli_select_db($con, $database);
if(!$db){
    echo 'Database not connected';
}
?>