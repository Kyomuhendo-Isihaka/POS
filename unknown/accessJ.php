<?php
$jsonString = file_get_contents("http://localhost/chatt/");

$data = json_decode($jsonString, true);

foreach ($data as $obj) {
    $chat_id = $obj['chat_id'];
    $chat_name = $obj['chat_name'];

    // echo $chat_id.", ".$chat_name;

}




$ecosense = file_get_contents("http://api.ecosensecities.com/v1/news.php");

$eco = json_decode($ecosense, true);

$results = $eco['results'];

// echo $result['title'].", ";
// echo$result['image_url'];


// print_r($eco);
// print_r($eco['results']);


// print_r($data)

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row">
            <?php
            foreach ($results as $result) { ?>
                <div class="col-md-6">
                    <h4>User Id</h4>
                    <p>
                        <?= $result['user_id'] ?>
                    </p>

                    <h4>User Name</h4>
                    <p>
                        <?= $result['username'] ?>
                    </p>

                    <h4>Profile</h4>
                    <img src="<?= $result['image_url'] ?>" />
                </div>
            </div>
            <?php
            }

            ?>
    </div>


</body>

</html>