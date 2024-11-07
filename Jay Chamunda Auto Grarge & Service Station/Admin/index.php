<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<title>Login</title>
</head>

<body>



    <div class="card login_card position-absolute top-50 start-50 translate-middle" style="width: 20rem;">
        <div class="card-body">
            <center>
                <h4 class="card-title shnm">Chamunda Auto Garage</h4>

                <h5 class="card-subtitle mb-2 crd_sub_tital">Admin Login</h5>
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
                        <input type="submit" value="Submit" name="s">
                    </center>

                </form>
            </div>
            
            <div class="error_mgs"></div>

        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>

<?php
session_start();
include "dbconfig.php";


if (isset($_POST['s'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM aaa WHERE user = '$user' AND pas = '$pass'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $udata = mysqli_fetch_array($data);
    // echo $total;

    if ($total == 1) {
        $usernm = $udata['user'];
        $_SESSION['usernam'] = $user;
        header('location:deshbord.php');
    } else {

        ?>

        <!-- <div style="color: red; font-weight: 600;">Invalid Username Or Password</div> -->

        <script>

        document.getElementsByClassName['error_mgs'].innerHTML = "Invalid Username Or Password";

        </script>

        <?php

    }

}

?>