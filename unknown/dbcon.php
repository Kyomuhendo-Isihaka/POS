<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat_app_db";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die;
}
// echo"Connected suceesfully";
?>