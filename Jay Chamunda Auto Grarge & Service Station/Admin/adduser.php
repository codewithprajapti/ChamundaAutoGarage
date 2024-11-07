<?php

error_reporting(0);

?>

<?php

session_start();

if (!isset($_SESSION['usernam'])) {
    header('Location: index.php'); // Redirect to login page if not logged in

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        .cbtn {

            background: #D6E6F2;
            border: 0;
            padding-left: 3vw;
            padding-right: 3vw;
            padding-top: 1vh;
            padding-bottom: 1vh;
            margin-top: 1vh;
            font-weight: 500;
            border-radius: 8px;

        }

        .cbtn:hover {

            background: #ffffff;

        }
    </style>

</head>
<title>Add User</title>
</head>

<body>



    <div class="card login_card position-absolute top-50 start-50 translate-middle" style="width: 20rem;">
        <div class="card-body">
            <center>
                <h4 class="card-title shnm">Chamunda Auto Garage</h4>

                <h5 class="card-subtitle mb-2 crd_sub_tital">Admin Register</h5>
            </center>
            <div class="card-text">
                <form action="" method="POST">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="user">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                    </div>
                    <center>
                        <input type="submit" class="cbtn" value="Submit" name="s">

                    </center>

                </form>
                <center>
                    <a href="deshbord.php"><button class="cbtn">Cancel</button></a>
                </center>
            </div>

            <div class="error_mgs"></div>

        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>

<?php

include 'dbconfig.php';

if (isset($_POST['s'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO aaa (user, pas) VALUES ('$user', '$pass')";
    $data = mysqli_query($conn, $query);

    ?>

    <script> alert("User Added Sucssesfully..") </script>


    <?php

}

?>