<?php
require('include/header.php');
include("include/dbcon.php");

include("data/vehicles.php");
include("data/drivers.php");
include("data/destination.php");


$vehicles = getAllVehicles($conn);
$drivers = getAllDrivers($conn);
$destinations = getAllDestinations($conn);
?>

<div class="row container-fluid mt-5">
    <div class="col-md-2 bg-light">
        <?php require('include/sidenav.php') ?>
    </div>

    <div class="col-md-10">

        <div class="container">
            <div class="col-md-12 mt-4">
                <h4 class="text-center">Add new Project</h4>

                <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Project No:</label>
                                <input id="uniqueValue" readonly type="text" class="form-control" name="project_number"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input2">Project Title</label>
                                <input type="text" class="form-control" name="project_title">
                            </div>
                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label>Vehicle</label>
                        <select class="form-select" name="vehicle" required>
                            <option selected></option>
                            <?php foreach ($vehicles as $vehicle): ?>
                                <option value="<?= $vehicle['id'] ?>"><?= $vehicle['vehicle_name']; ?><p class="m-3">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                        <?= $vehicle['vehicle_num'] ?>
                                    </p>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label>Driver</label>
                        <select class="form-select" name="dv" required>
                            <option selected></option>
                            <?php foreach ($drivers as $dv): ?>
                                <option value="<?= $dv['id'] ?>"><?= $dv['username']; ?><p class="m-3">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                        <?= $dv['contact'] ?>
                                    </p>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="row mt-4">
                        <?php foreach ($destinations as $destination): ?>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="destination[]"
                                        value="<?= $destination['id'] ?>">
                                    <label class="form-check-label">
                                        <?= $destination['dest_name'] ?>
                                    </label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" name="add_project" class="btn btn-primary form-control">Add
                            Project</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

























<?php require('include/footer.php') ?>