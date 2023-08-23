<?php
//get all drivers

function getAllDrivers($conn){
    $sql = "SELECT * FROM drivers";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()>=1){
        $drivers = $stmt->fetchAll();
        return $drivers;
    }else{
        return 0;
    }
}

//get driver by Id
function getDriverById($driver_id, $conn){
    $sql = "SELECT * FROM drivers WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$driver_id]);

    if($stmt->rowCount()==1){
        $driver = $stmt->fetch();
        return $driver;
    }else{
        return 0;
    }
}

?>