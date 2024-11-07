<?php
include 'dbconfig.php';

if (isset($_POST['sbt'])) {

    $nm = $_POST['nm'];
    $em = $_POST['em'];
    $ph = $_POST['ph'];
    $sub = $_POST['sub'];
    $mgs = $_POST['mgs'];

    $query = "INSERT INTO feedback (nam, email, phone, subjec, messag) VALUES ('$nm', '$em', '$ph', '$sub', '$mgs')";
    $data = mysqli_query($conn, $query);

    ?>

    <script>

        alert("Feedback Sent Sucssesfully");

    </script>

    <META http-equiv="refresh" content="0;contactus.php">

    <?php





}

?>