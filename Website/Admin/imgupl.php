<?php

include 'dbconfig.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Image Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
    <div class="container-fluid">
        
        <div class="row">
            <?php
            

            // Fetch images from the database
            $sql = "SELECT * FROM gallery";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-4 card img_con">
                            <img src="../uploads/' . $row["image"] . '" class="img-fluid img-thumbnail" alt="Gallery Image">
                            <br>
                            <a href="imgdelete.php?id=' . $row["id"] . ' " class="det"> Delete </a>
                          </div>';
                }
            } else {
                echo '<p>No images found in the gallery.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
