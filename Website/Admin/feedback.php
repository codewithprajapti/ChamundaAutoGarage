

<!doctype html>
<html lang="en">

</html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FeedBack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="feedback.css">
</head>

<body>

    <div class="container-fluid main_con"> <!-- Main Div Starting -->

        <div class="row"><!-- Main Row Starting -->
            <?php

            include 'dbconfig.php';

            $query = "SELECT * FROM feedback";
            $data = mysqli_query($conn, $query);

            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {

                    echo '<div class="col-md-4"><!-- Main Column Starting -->';
                    echo '<div class="card"><!-- Card Starting -->'; // Removed fixed width here
                    echo '<div class="card-body"><!-- Card Body Starting -->';

                    echo '<h5 class="card-title">' . htmlspecialchars($row['nam']) . '</h5>';
                    echo '<h6 class="card-subtitle mb-2 text-body-secondary"> ' . htmlspecialchars($row['subjec']) . '</h6>';
                    echo '<p class="card-text"> ' . htmlspecialchars($row['messag']) . '</p>';
                    echo '<p class="card-text">' . htmlspecialchars($row['phone']) . '</p>';
                    echo '<p class="card-text">' . htmlspecialchars($row['email']) . '</p>';
                    echo ' <a href="tel: '. htmlspecialchars($row['phone']) .' " ' .'class="card-link crd_btn">Call</a>';
                    echo ' <a href="mailto: '. htmlspecialchars($row['email']) .' " ' .'class="card-link crd_btn">Email</a>';
                    echo '  <a href="delete.php?id=' . $row['id'] . ' " ' . 'class="card-link crd_det">Delete</a>';

                    echo '</div> <!-- Card Body Ending -->';
                    echo '</div> <!-- Card Ending -->';

                    echo '</div> <!-- Main Column Ending -->';
                }
            } else {
                echo '<p>No feedback found.</p>';
            }
            ?>
        </div> <!-- Main Row Ending -->

    </div> <!-- Main Div Ending -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>