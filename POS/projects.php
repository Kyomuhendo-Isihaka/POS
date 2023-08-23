<?php
require('include/header.php');
include('include/dbcon.php');

include('data/projects.php');

$projects = getAllProjects($conn);



?>

<div class="row container-fluid mt-5">
    <div class="col-md-2 bg-light">
    <?php require('include/sidenav.php');?>
    </div>

    <div class="col-md-10">


        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h4 class="text-center">Projects</h4>
                    <a href="add_project.php" class="btn btn-primary float-end mb-2">Add Project</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>S/N</th>
                            <th>Project Title</th>
                            <th>Date</th>

                        </thead>
                        <tbody>
                            <?php
                            // $sql = "SELECT * FROM projects";
                            // $stmt = $conn->prepare($sql);
                            // $stmt->execute();

                            // $stmt->setFetchMode(PDO::FETCH_OBJ);

                            // $result = $stmt->fetchAll();
                            if ($projects) {
                                foreach ($projects as $project) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $project['id'];?>
                                        </td>
                                        <td>
                                            <?= $project['project_title'] ?>
                                        </td>
                                        <td>
                                            <?= $project['created_at'] ?>
                                        </td>
                                        <td>
                                            <a href="view_project.php?id=<?= $project['id'] ?>" class="btn btn-success">View</button>
                                        </td>
                                    </tr>
                                    <?php
                                }

                            } else {
                                ?>
                                <tr>
                                    <td colspan=3>No Project</td>
                                </tr>
                                <?php
                            } ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>