<?php
require('include/header.php');

include('include/dbcon.php');

include('data/projects.php');
include('data/vehicles.php');
include('data/drivers.php');
include('data/destination.php');

$projects = getAllProjects($conn);



?>
<div class="row container-fluid mt-5">
    <div class="col-md-2 bg-light">
        <?php require('include/sidenav.php'); ?>
    </div>



    <div class="col-md-10">
        <div class="container mt-4">
            <h4 class="text-center">Work Log</h4>
            <?php

            foreach ($projects as $project) {
                ?>
                <div class="row mt-5 ">

                    <h4 class="text-center mt-4 mb-4 text-primary">
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
                $dest = '';
                $destinations = str_split(trim($project['destination']));
                foreach ($destinations as $destination) {
                    $d_temp = getDestinationById($destination, $conn);
                    if ($d_temp != 0) {
                        $dest = $d_temp['dest_name'];
                        $dest_len = $d_temp['dest_length'];


                        ?>
                        <div class="row mt-3">

                            <div class="col-md-4">
                                <?= $dest; ?>
                            </div>

                            <div class="col-md-3">
                                <h5><span>
                                        <?= $dest_len ?>Km
                                    </span></h5>
                            </div>

                            <div class="col-md-2">
                                <input type="number" min="0" step="1" class="form-control" id="amountinput">
                            </div>

                            <div class="col-md-2">
                                <div class="dropdown">
                                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#popupModal">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </div>


                                <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <p>Do you want to cancel this Destination?</p>
                                                <div class="d-grid gap-2">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button" class="btn btn-danger" id="confirmButton">Yes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
                    }

                }
                ?>
                <hr class="mt-3">

                <div class="row">

                    <div class="col-md-4">
                        <h4 class="text-bold">Total Distance :</h4>
                    </div>

                    <div class="col-md-4">
                        <h4><span>100Km</span></h4>
                    </div>

                </div>
                <?php
            } ?>
        </div>

    </div>


</div>




















<?php
require('include/footer.php')
    ?>