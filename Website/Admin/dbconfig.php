<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chamunda";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{

    // echo "Connection Ok";


}

else{

    echo "connection failed".mysqli_connect_error();
    

}
?>