<?php 

session_start();

if (!isset($_SESSION['usernam'])) {
    header('Location: index.php'); // Redirect to login page if not logged in

}

include 'header.php';
include 'imguploadform.php';
include 'imgupl.php';

?>