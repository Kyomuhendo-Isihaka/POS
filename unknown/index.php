<?php 
include('dbcon.php');

$sql = "SELECT * FROM chats";
$result = $conn->query($sql);

$item = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["chat_id"]. " - Name: " . $row["chat_name"]. ", image: " . $row["profile_pic"]. ", message: " . $row['chat_text'] . "<br>";

    array_push($item, $row);
    // echo json_encode($row); not recommended
  }
} else {
  echo "0 results";
}

echo json_encode($item);

// print_r($item);

$conn->close();

?>