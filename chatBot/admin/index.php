<?php
session_start();
$sessionId = $_SESSION['id'] ?? '';

include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) {
    echo mysqli_error($connection);
    throw new Exception("Database cannot Connect");
}

$id = $_REQUEST['id'] ?? 'dashboard';
$action = $_REQUEST['action'] ?? '';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body class="">

    <!--------------------------------- Sideber -------------------------------->

    <div class="sidenav position-fixed bg-success">
        <a href="index.php" class="nav-link">
            <h1 class="text-center">OLCB</h1>
        </a>

        <ul>
            <li id="left" class="<?php if ('dashboard' == $id) {
                echo " active";
            } ?>">
                <a href="index.php?id=dashboard" class="nav-link">
                    <h5>Dashboard</h5>
                </a>
            </li>


            <li class="<?php if ('add_question' == $id) {
                echo "active";
            } ?>">
                <a href="index.php?id=add_query" class="nav-link">
                    <h5>Add Query</h5>
                </a>
            </li>

            <li class="<?php if ('all_queries' == $id) {
                echo "active";
            } ?>">
                <a href="index.php?id=all_queries" class="nav-link">
                    <h5>All Queries</h5>
                </a>
            </li>
            <li class="<?php if ('unanswered_queries' == $id) {
                echo "active";
            } ?>">
                <a href="index.php?id=unanswered_queries" class="nav-link">
                    <h5>Unanswered Queries</h5>
                </a>
            </li>

            <li class="<?php if ('settings' == $id) {
                echo "active";
            } ?>">
                <a href="index.php?id=settings" class="nav-link">
                    <h5>Settings</h5>
                </a>
            </li>
        </ul>
    </div>
    <!--------------------------------- #Sideber -------------------------------->



    <section class="main">
        <div class="topbar">
            <div class="topbar_profile">
                <a href="logout.php" class="text-success">Log Out</a>
            </div>
        </div>

        <div class="container p-5  mt-5">
            <?php
            if (isset($_REQUEST['update_success'])) {
                echo "<h5 class='text-center'style='color:green;'>Profile Updated successfully</h5>";
            }else if (isset($_REQUEST['update_fail'])) {
                echo "<h5 class='text-center' style='color:red;'>Profile Update failed</h5>";
            }
            ?>
            <!--------------------------------------- dashbord ------------------------------------------------------------------------- -->
            <?php if ('dashboard' == $id) { ?>

                <div class="dashboard mt-5">
                    <div class="dashboard-card bg-success">
                        <h3 class="text-white text-center">
                            <?php
                            $query = "SELECT COUNT(*) totalquery FROM question;";
                            $result = mysqli_query($connection, $query);
                            $totalPharmacist = mysqli_fetch_assoc($result);
                            echo $totalPharmacist['totalquery'];
                            ?>
                        </h3>
                        <p class="text-center text-white">Total Queries</p>
                    </div>

                    <div class="dashboard-card bg-success">
                        <h3 class="text-white text-center">
                            <?php
                            $query = "SELECT COUNT(*) totalquery FROM unanswered_query;";
                            $result = mysqli_query($connection, $query);
                            $totalPharmacist = mysqli_fetch_assoc($result);
                            echo $totalPharmacist['totalquery'];
                            ?>
                        </h3>
                        <p class="text-center text-white">Unanswered Queries</p>
                    </div>
                </div>
            <?php } ?>

            <!--------------------------------------- add Query----------------------------------------- -->

            <?php if ('add_query' == $id) { ?>
                <h2 class="text-center mt-5">Add new Query</h2>
                <div class="card mt-5 p-5 bg-white aq-card">

                    <form action="code.php" method="post" class="form-group">
                        <label for="question">Question:</label>
                        <input type="text" id="question" class="form-control mt-2 mb-4" name="question" required>
                        <label for="keywords">Keywords (comma-separated & max-Three):</label>
                        <input type="text" id="keywords" name="keywords" class="form-control mt-2 mb-4" required>
                        <label for="response">Response:</label>
                        <textarea id="response" name="response" class="form-control mt-2" required></textarea>
                        <button class="btn btn-success mt-3" name="add_query" type="submit">Add Query</button>
                    </form>
                </div>
            <?php } ?>



            <!---------------------------------------- all Queries ------------------------------------------------------------------------- -->
            <?php if ('all_queries' == $id) {

                ?>

                <h3 class="text-center">All queries</h3>
                <table class="table  mt-3 al-card">
                    <thead>

                        <th>Question</th>
                        <th>Response</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </thead>

                    <?php
                    $get_questions = "SELECT DISTINCT response.response, question.question, question.question_id
                    FROM question  
                    INNER JOIN response ON question.keyword1 = response.keyword1
                                       AND question.keyword2 = response.keyword2
                                       AND question.keyword3 = response.keyword3;";


                    $stmt = mysqli_query($connection, $get_questions);

                    while ($question = mysqli_fetch_assoc($stmt)) {


                        ?>
                        <tbody>
                            <tr>

                                <td>
                                    <?php printf("%s", $question['question']) ?>
                                </td>
                                <td>
                                    <?php printf("%s", $question['response']) ?>
                                </td>
                                <td>
                                    <a href="index.php?action=edit_query&id=<?= $question['question_id']; ?>"
                                        class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="text" hidden name="query_id" value="<?= $question['question_id']; ?>">
                                        <button type="submit" name="deleteQuery" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        </tbody>

                        <?php

                    }


                    ?>

                </table>
            <?php } ?>

            <!-- ----------------------------------edit query ------------------------------------ ---------->
            <?php if ('edit_query' == $action) {
                $questionid = $_REQUEST['id'];

                $selectedQuestion = "SELECT * FROM question WHERE question_id = '$questionid'";
                $stmt = $connection->query($selectedQuestion);
                $question = $stmt->fetch_assoc();

                $selectedResponse = "SELECT * FROM response WHERE response_id = '$questionid'";
                $res = $connection->query($selectedResponse);
                $response = $res->fetch_assoc();

                ?>
                <h2 class="text-center mt-5">Edit Query</h2>
                <div class="card mt-5 p-5 bg-white aq-card">

                    <form action="code.php" method="post" class="form-group">
                        <input type="text" value="<?= $questionid ?>" name="query_id" hidden>
                        <label for="question">Question:</label>
                        <input type="text" id="question" class="form-control mt-2 mb-4" name="question"
                            value="<?= $question['question'] ?>" required>
                        <label for="keywords">Keywords (comma-separated $ max-Three):</label>
                        <input type="text" id="keywords" name="keywords" class="form-control mt-2 mb-4"
                            value="<?= $response['keyword1'] . "," . $response['keyword2'] . "," . $response['keyword3']; ?>"
                            required>
                        <label for="response">Response:</label>
                        <input id="response" name="response" class="form-control mt-3" value="<?= $response['response'] ?>"
                            required>
                        <button class="btn btn-success mt-3" name="update_query" type="submit">Update Query</button>
                    </form>
                </div>
            <?php } ?>

            <!------------------------------------------------------ unanswered queries---------------------------------------------------------------------- -->
            <?php if ('unanswered_queries' == $id) {
                $sql = "SELECT * FROM unanswered_query";
                $stmt = $connection->query($sql);


                ?>
                <h3 class="text-center mt-5">Unanswered Queries</h3>
                <table class="table al-card mt-3 ">
                    <thead>
                        <th>Query</th>
                        <th>Date asked</th>
                        <th>Action</th>
                    </thead>


                    <?php

                    while ($query = $stmt->fetch_assoc()) {

                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $query['query'] ?>
                                </td>
                                <td>
                                    <?= $query['created_at'] ?>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="text" hidden name="query_id" value="<?= $query['id']; ?>">
                                        <button type="submit" name="delete_unansweredQuery"
                                            class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>

                    <?php } ?>
                </table>
            <?php } ?>

            <!-- ------------------------------------------ settings ---------------------------------- -->
            <?php
            if ('settings' == $id) {
                $userid = $_SESSION['id'];

                $selectUser = "SELECT * FROM users WHERE user_id = '$userid'";
                $stmt = $connection->query($selectUser);

                $user = $stmt->fetch_assoc();

                ?>
                <h3 class="text-center mt-3">Settings</h3>
                <div class="aq-card">
                    <h3 class="text-center">Update User Profile</h3>
                    <form action="code.php" method="POST" class="form-group">
                        <input type="text" name="userid" value="<?= $user['user_id'] ?>" id="" hidden>
                        <label for="email">User Email Address</label>
                        <input type="email" name="email" id="" class="form-control mt-2 mb-3"
                            value="<?= $user['user_email'] ?>" required>
                        <label for="oldPassword">Old Password</label>
                        <input type="password" name="old-pass" id="" class="form-control mt-2 mb-3" required>
                        <label for="newPassword">New Password</label>
                        <input type="password" name="new-pass" id="" class="form-control" required>
                        <button class="btn btn-success mt-3" name="update_profile" type="submit">Update Profile</button>
                    </form>
                </div>


                <?php
            }
            ?>




        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>

</body>

</html>