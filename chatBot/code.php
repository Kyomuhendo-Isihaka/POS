<?php
$conn = mysqli_connect('localhost', 'root', '', 'chatbot_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['user_input'];

    $query = "SELECT DISTINCT response.response
    FROM question
    INNER JOIN response ON question.keyword1 = response.keyword1
                       AND question.keyword2 = response.keyword2
                       AND question.keyword3 = response.keyword3
    WHERE question.question = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $userInput);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $botResponse = $row['response'];
    } else {
        $sql = "INSERT INTO unanswered_query(query) VALUES('$userInput')";
        $stmt = $conn->query($sql);

        $botResponse = "I'm not sure how to respond to that.";
    }

    echo $botResponse;
    
    $stmt->close();
}

$conn->close();
?>


