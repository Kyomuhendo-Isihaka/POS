<?php
session_start();

include('include/dbcon.php');

include('data/projects.php');
include('data/vehicles.php');
include('data/drivers.php');
include('data/destination.php');

$destinations = getAllDestinations($conn);


//add new project
if (isset($_POST['add_project'])) {

    $project_number = $_POST['project_number'];
    $project_title = $_POST['project_title'];
    $vehicle = $_POST['vehicle'];
    $destination = implode(",", $_POST['destination']);

    $dvr = $_POST['dv'];

    $sql = "INSERT INTO projects(project_number, project_title, vehicle, driver, destination, created_at) VALUES('$project_number', '$project_title', '$vehicle', '$dvr','$destination', Now())";

    $stmt = $conn->query($sql);

    if ($stmt) {
        header('Location: projects.php');
    }

}


//add destinations
if (isset($_POST['add_destinations'])) {
    $project_id = $_POST['project_id'];
    $destination = implode(",", $_POST['destination']);

    $sql = "UPDATE projects SET destination = '$destination' WHERE id = '$project_id'";
    $stmt = $conn->query($sql);
    if ($stmt) {
        header('Location: view_project.php?id='.$project_id);
    }

}


// Remove destination from a project

if (isset($_POST['remove_destination'])) {
    $project_id = $_POST['project_id'];
    $dest_id = $_POST['dest_id'];

        $sql = "";
        $stmt = $conn->query($sql);
        if ($stmt) {
            header('Location: projects.php');
        }
    }




?>