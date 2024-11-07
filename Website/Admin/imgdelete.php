<?php
include 'dbconfig.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // echo $id;
    $sql = "DELETE FROM gallery WHERE id = $id";
    $data = mysqli_query($conn, $sql);

    if ($data === TRUE) {

        // echo "Data Deleted Successfully...";

        ?>

        <script>

            alert("Image Deleted Successfully!");

        </script>

        <META http-equiv="refresh" content="0;gallery.php">

        <?php

    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>