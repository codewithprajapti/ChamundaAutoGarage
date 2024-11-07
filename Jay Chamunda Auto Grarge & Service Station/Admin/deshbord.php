<?php 

session_start();

if (!isset($_SESSION['usernam'])) {
    header('Location: index.php'); // Redirect to login page if not logged in

}

include 'header.php';
include 'feedback.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshboard</title>
</head>
<body>


</center>
</body>
</html>

