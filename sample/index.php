<?php
include('db.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shaka crud PDO</title>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $emial = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "INSERT INTO users(username,email,password) VALUES(?,?,?)";

        $res = $conn->prepare($query);
        $data = [$uname, $emial, $pass];

        $result = $res->execute($data);

        if ($result) {
            echo "Success";
            header('Location: index.php');

        } else {
            echo "failed";
            header('Locatin: index.php');
        }


    }


    ?>

    <form method="POST">
        <h1>Form Inputs</h1>
        <input type="text" name="uname" placeholder="enter username">
        <input type="text" name="email" placeholder="enter email">
        <input type="text" name="pass" placeholder="enter password">

        <button type="submit" name="submit">submit</button>
    </form>
    <h1>Read, edit and Delete</h1>

    <table>
        <thead>
            <th>ID</th>
            <th>username</th>
            <th>Email</th>
            <th>Passord</th>
            <th>Action</th>
        </thead>

        <tbody>

            <?php

            $sql = "SELECT * FROM users";
            $res = $conn->prepare($sql);
            $res->execute();

            $result = $res->fetchAll();
            if ($result) {
                foreach($result as $row){
                    ?>
                    <tr>
                        <td><?=$row['id'] ?></td>
                        <td><?=$row['username'] ?></td>
                        <td><?=$row['email'] ?></td>
                        <td><?=$row['password'] ?></td>
                        <td><a href="#edit?id=<?=$row['id']?>">Edit</a></td>
                        <td>
<!-- for delete -->
                        <?php
                            if(isset($_POST['delete'])){
                                
                                $id = $_POST['id'];

                                try{

                                    $sql = "DELETE FROM users WHERE id='$id'";
                                    $stmt = $conn->prepare($sql);

                                    $stmt->execute($id);

                                }catch(PDOException $e){
                                    echo $e->getMessage();
                                }
                            }
                        
                        ?>
                        <form method="POST">
                        <button type="submit" name="delete">Delete</button>
                        </form>
                       </td>
                    </tr>

                    <?php
                }


            } else {

                ?>
                <tr>
                    <td>No records</td>
                </tr>
                <?php
            }

            ?>


        </tbody>
    </table>


    <h1>Edit section</h1>
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM user WHERE id=:id LIMIT 1";
            $stmt = $conn->prepare($sql);
            $data = [':id'=>$id];
            $stmt->execute($data);

            $res = $stmt->fecth(PDO::FETCH_OBJ);
            

            
        }
   ?>
    <form method="POST">
        
        <input type="text" name="euname" value="<?= $res->username;?>" >
        <input type="text" name="eemail" value="<?= $row['email'];?>">
        <input type="text" name="epass" value="<?= $row['password'];?>">

        <button type="submit" name="edit">update</button>
    </form>
</body>

</html>