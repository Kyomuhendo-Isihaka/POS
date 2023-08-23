<?php
//get all vehicles

function getAllVehicles($conn){
    $sql = "SELECT * FROM vehicles";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()>=1){
        $vehicles = $stmt->fetchAll();
        return $vehicles;
    }else{
        return 0;
    }
}

//get vehicle by Id
function getVehicleById($vehicle_id, $conn){
    $sql = "SELECT * FROM vehicles WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$vehicle_id]);

    if($stmt->rowCount()==1){
        $vehicle = $stmt->fetch();
        return $vehicle;
    }else{
        return 0;
    }
}

?>