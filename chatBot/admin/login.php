<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatbot_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email && $password) {
        $query = "SELECT * FROM users WHERE user_email='{$email}'";
        $result = $conn->query($query);

        if ($data = $result->fetch_assoc()) {
            $_passsword = $data['user_password'];
            $_email = $data['user_email'];
            $_id = $data['user_id'];

            if ($password != $_passsword) {
                
                header("location:login.php?error");
               
            } else {
                $_SESSION['id'] = $_id;
                header("location:index.php?id=dashboard");
                die();
            }
        } else {

            header("location:login.php");
        }

    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body class="bg-light">

    <div class="container mt-4 my-4 bg-success py-5">
        <h3 class="text-center text-white">Online Logistic ChatBot</h3>

        <div class="login-card bg-white">
            <h3 class="text-center text-success">LOGIN</h3>
            <?php if (isset($_REQUEST['error'] ) ) {
                                    echo "<h5 class='text-center' style='color:red;'>Email or Password is Wrong, try again!</h5>";
                            }?>
            <form action="" method="POST" class="form-group">

                <input type="text" class="form-control mt-4" placeholder="Admin Email" name="email" id="" required>
                <input type="password" class="form-control mt-4" placeholder="Admin password" name="password" id="" required>

                <button type="submit" name="login" class="btn btn-success form-control mt-4">Login</a></button>
            </form>

        </div>
    </div>
</body>

</html>