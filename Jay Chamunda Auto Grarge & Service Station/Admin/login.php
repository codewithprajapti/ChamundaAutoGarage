<?php
session_start();
include "dbconfig.php";


if (isset($_POST['s'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM aaa WHERE user = '$user' AND pas = '$pass'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo $total;

    if ($total == 1) {
        
        $_SESSION['username'] = $user;
        header('location:deshbord.php');
    } else {

        ?>

        <div style="color: red; font-weight: 600;">Invalid Username Or Password</div>

        <?php

    }

}

?>