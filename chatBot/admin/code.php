<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatbot_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//add a query
    if (isset($_POST['add_query'])) {
        $question = $_POST['question'];
        $keywords = $_POST['keywords'];
        $response = $_POST['response'];

        $keywordArray = explode(',', $keywords);
        $keyword1 = trim($keywordArray[0]);
        $keyword2 = trim($keywordArray[1]);
        $keyword3 = trim($keywordArray[2]);
        $questionQuery = "INSERT INTO question (question, keyword1, keyword2, keyword3)
                      VALUES ('$question', '$keyword1', '$keyword2', '$keyword3')";
        $responseQuery = "INSERT INTO response (response, keyword1, keyword2, keyword3)
                      VALUES ('$response', '$keyword1', '$keyword2', '$keyword3')";

        if ($conn->query($questionQuery) && $conn->query($responseQuery)) {
            header('Location: index.php?id=all_queries');
 
        } else {
            echo "Error: " . $conn->error;
        }
    }

// update query
if(isset($_POST['update_query'])){

    $query_id = $_POST['query_id'];
    $question = $_POST['question'];
    $keywords = $_POST['keywords'];
    $response = $_POST['response'];
      
    $keywordArray = explode(',', $keywords);
        $keyword1 = trim($keywordArray[0]);
        $keyword2 = trim($keywordArray[1]);
        $keyword3 = trim($keywordArray[2]);

        $ques = "UPDATE question SET question='$question', keyword1='$keyword1', keyword2='$keyword2', keyword3='$keyword3' WHERE question_id='$query_id'";
        $q= $conn->query($ques);

        $res = "UPDATE response SET response='$response', keyword1='$keyword1', keyword2='$keyword2', keyword3='$keyword3' WHERE response_id='$query_id'";
        $r= $conn->query($res);

        header('location: index.php?id=all_queries');

}


    

    //delete a query from all queries
    if(isset($_POST['deleteQuery'])){
        $query_id = $_POST['query_id'];
        $sql = "DELETE FROM question WHERE question_id='$query_id'";
        $stmt = $conn->query($sql);

        $query = "DELETE FROM response WHERE response_id = '$query_id'";
        $res = $conn->query($query);
        header("location: index.php?id=all_queries");
    }


    //delete unanswered query
        if(isset($_POST['delete_unansweredQuery'])){
        $query_id = $_POST['query_id'];
        $sql = "DELETE FROM unanswered_query WHERE id='$query_id'";
        $stmt = $conn->query($sql);

        header("location: index.php?id=unanswered_queries");
    }

// update profile

if(isset($_POST['update_profile'])){
    $user_id = $_POST['userid'];
    $email = $_POST['email'];
    $oldPass = $_POST['old-pass'];
    $newPass = $_POST['new-pass'];

   $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
   $stmt = $conn->query($sql);
   $user = $stmt->fetch_assoc();

   $pass = $user['user_password'];
   
   if($oldPass == $pass){
    $query = "UPDATE users SET user_email='$email', user_password='$newPass' WHERE user_id='$user_id'";
    $result = $conn->query($query);
    header('location:index.php?update_success');
   }else{
        header('location:index.php?update_fail');
   }
}
   
?>