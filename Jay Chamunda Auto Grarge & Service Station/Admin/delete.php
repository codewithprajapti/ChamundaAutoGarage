<?php
include 'dbconfig.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // echo $id;
    $sql = "DELETE FROM feedback WHERE id = $id";
    $data = mysqli_query($conn, $sql);

    if ($data === TRUE) {

        ?>

                <script>

                    alert("Feedback Deleted Successfully!");

                </script>

                <META http-equiv="refresh" content="0;deshbord.php">


                <?php

    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>