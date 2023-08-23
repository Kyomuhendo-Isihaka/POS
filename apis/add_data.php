<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api testing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="text-center">Api add data Operation</h4>
        <form action="api_insertdata.php" method="Post">
            <div class="mb-3">
                <label class="form-label">First name</label>
                <input type="text" name="firstname" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>