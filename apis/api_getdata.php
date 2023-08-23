<?php 
include("include/dbcon.php");

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);

$stmt->execute();

$users = $stmt->fetchAll();


print_r($users);
?>