<?php

include("include/dbcon.php");

if (isset($_POST['submit'])) {

    $array = [];

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO users (firstname, lastname, username, email, gender,password) VALUES ('$fname','$lname','$uname','$email','$gender','$pass')";

    $stmt = $conn->query($sql);

    if ($stmt == true) {
        $array['status'] = "Inserted successfully";
    } else {
        $array['status'] = "Error: " . $conn->$e;
    }

    echo json_encode($array);


}


?>