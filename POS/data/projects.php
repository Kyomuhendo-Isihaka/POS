<?php
//get all projects

function getAllProjects($conn){
    $sql = "SELECT * FROM projects";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()>=1){
        $projects = $stmt->fetchAll();
        return $projects;
    }else{
        return 0;
    }
}

//get driver by Id
function getProjectById($project_id, $conn){
    $sql = "SELECT * FROM projects WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$project_id]);

    if($stmt->rowCount()==1){
        $project = $stmt->fetch();
        return $project;
    }else{
        return 0;
    }
}

?>