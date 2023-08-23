<?php
//get all destinations

function getAllDestinations($conn){
    $sql = "SELECT * FROM destinations";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()>=1){
        $destinations = $stmt->fetchAll();
        return $destinations;
    }else{
        return 0;
    }
}

//get destination by Id
function getDestinationById($dest_id, $conn){
    $sql = "SELECT * FROM destinations WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$dest_id]);

    if($stmt->rowCount()==1){
        $destination = $stmt->fetch();
        return $destination;
    }else{
        return 0;
    }
}

?>