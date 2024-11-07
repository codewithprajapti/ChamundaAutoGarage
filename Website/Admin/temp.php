<?php
error_reporting(0);
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="nm" placeholder="Enter User Name"><br><br>
        <input type="password" name="pas" placeholder="Enter Password"><br><br>
        <input type="file" name="photo" id=""><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if (isset($_FILES["photo"])) {

    $user = $_POST['nm'];
    $pass = $_POST['pas'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "user/" . $filename;

    // if (move_uploaded_file($tempname, $folder)) {
    //     echo "File uploaded successfully!";
    // } else {
    //     echo "Failed to upload file.";
    // }

    $query = "INSERT INTO aaa (user, pas, img) VALUES ('$user', '$pass', '$folder')";
    $data = mysqli_query($conn, $query);


}
?>