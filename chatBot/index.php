<!DOCTYPE html>
<html>

<head>
    <title>Online logistic Chatbot</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="card mt-5 w-100 al-card">
            <div class="bg-success">
                <a href="admin/login.php" class="nav-link"><h3 class="text-center text-white">Let's chat</h3></a>
            </div>
            <div id="chatbox"></div>
        </div>

        <div class="fixed-bottom">
            <form id="userInputForm" action="" class="form-group">
                <div class="row p-3">
                    <div class="col-md-11">
                        <input type="text" id="userInput" class="form-control" placeholder="Type your message..." />
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
            </form>

        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>