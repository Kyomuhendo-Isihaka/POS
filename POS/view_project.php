<?php
session_start();

require('include/header.php');

include('include/dbcon.php');
include('data/projects.php');
include('data/vehicles.php');
include('data/drivers.php');
include('data/destination.php');

$destinations = getAllDestinations($conn);

if (isset($_GET['id'])) {
    $project_id = $_GET['id'];

    $project = getProjectById($project_id, $conn);
}

?>

<div class="row container-fluid mt-5">
    <div class="col-md-2 bg-light">
        <?php require('include/sidenav.php'); ?>
    </div>

    <div class="col-md-10">

        <div class="container">
            <div class="row mt-4">

                <h4 class="text-center mt-4 mb-4">
                    <?= $project['project_title']; ?>
                </h4>
                <div class="col-md-6">
                    <h5 class="mb-4">Project No: &nbsp<span>
                            <?= $project['project_number'] ?>
                        </span></h5>

                    <?php
                    $vehicle = $project['vehicle'];
                    $v = getVehicleById($vehicle, $conn);
                    ?>
                    <h5>Vehicle: &nbsp<span>
                            <?= $v['vehicle_num']; ?>
                        </span></h5>

                    <?php
                    $driver = $project['driver'];
                    $d = getDriverById($driver, $conn);
                    ?>

                    <h5>Driver:&nbsp<span>
                            <?= $d['username'] ?>
                        </span></h5>
                </div>

                <div class="col-md-6">
                    <h5 class="mb-4">Date: &nbsp<span>
                            <?= $project['created_at'] ?>
                        </span></h5>

                    <h5>Fuel Balance: &nbsp<span> 130Ltrs</span></h5>

                    <h5>Fuel RCVD: &nbsp<span> 130Ltrs</span></h5>

                </div>
            </div>



            <hr>

            <div class="row">
                <div class="col-md-4">
                    <h5>Destinations</h5>
                </div>

                <div class="col-md-3">
                    <h5>Distance</h5>
                </div>

                <div class="col-md-2">
                    <h5>Trips</h5>
                </div>



            </div>

            <?php

            $destination_ids = str_split(trim($project['destination']));
            foreach ($destinations as $index => $destination) {

                foreach ($destination_ids as $destiny_id) {

                    if ($destiny_id == $destination['id']) {


                        ?>
                        <div class="row mt-3">

                            <div class="col-md-4">
                                <?= $destination['dest_name']; ?>
                            </div>

                            <div class="col-md-3">

                                <h5><span>
                                        <?= $destination['dest_length'] ?>Km
                                    </span></h5>
                            </div>

                            <div class="col-md-3">
                                <form action="code.php" method="POST">
                                    <input type="number" value="9" min="0" step="1" name="" class="form-control">
                                </form>
                            </div>

                            <div class="col-md-2">

                                <div class="dropdown">
                                    <button class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#remove_destination<?= $index ?>">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </div>

                                <div class="modal fade" id="remove_destination<?= $index ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <p>Do you want to cancel this Destination?
                                                    <?= $index ?>
                                                </p>

                                                <form action="code.php" method="POST">

                                                    <input name="project_id" type="text" value="<?= $project_id ?>">
                                                    <input type="text" name="dest_id" value="<?= $index ?>">


                                                    <div class="d-grid gap-2">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">No</button>

                                                        <button type="submit" name="remove_destination" class="btn btn-danger"
                                                            id="confirmButton">Yes</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    <?php }
                }
            } ?>


            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="text-center">
                        <button class="btn bg-light" data-bs-toggle="modal"
                            data-bs-target="#destination_popup">+</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="destination_popup" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Destination</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="code.php">
                                <div class="row mb-3">
                                    <input name="project_id" type="text" value=<?= $project_id; ?> hidden>

                                    <?php
                                    $site_ids = str_split(trim($project['destination']));
                                    foreach ($destinations as $site) {
                                        $checked = 0;
                                        foreach ($site_ids as $site_id) {
                                            if ($site_id == $site['id']) {
                                                $checked = 1;
                                            }
                                        }
                                        ?>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" <?php if ($checked)
                                                    echo "checked"; ?>
                                                    type="checkbox" name="destination[]" value="<?= $site['id'] ?>">
                                                <label class="form-check-label">
                                                    <?= $site['dest_name'] ?>
                                                </label>
                                            </div>
                                        </div>

                                    <?php }
                                    ; ?>

                                </div>
                                <button type="submit" name="add_destinations" class="btn btn-primary">save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mt-3">

            <div class="row">

                <div class="col-md-4">
                    <h4 class="text-bold">Total Distance :</h4>
                </div>

                <div class="col-md-4">
                    <h4><span>100Km</span></h4>
                </div>
                <div class="col-md-4">

                </div>


            </div>

        </div>



        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <a href="" class="btn btn-primary float-end">Print</a>
            </div>

        </div>
    </div>


</div>
</div>

























<?php require('include/footer.php') ?>