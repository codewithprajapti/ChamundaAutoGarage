<?php

include 'dbconfig.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $imageName = basename($image['name']);
        $uploadDir = '../uploads/';

        // Move the uploaded file to the uploads folder
        if (move_uploaded_file($image['tmp_name'], $uploadDir . $imageName)) {
            // Insert the image name into the database
            $sql = "INSERT INTO gallery (image) VALUES ('$imageName')";
            if ($conn->query($sql) === TRUE) {
                // echo "Image uploaded successfully!";
                ?>

                <script>

                    alert("Image uploaded successfully!");

                </script>

                <META http-equiv="refresh" content="0;gallery.php">


                <?php


            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "No file uploaded or error during upload.";
    }

    $conn->close();
}
?>