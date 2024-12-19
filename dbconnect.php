<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pharmacy1";

    $connection = mysqli_connect($hostname, $username, $password, $database,);

    if (!$connection) {
        die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
    }
    else {
    }

?>

<?php include('dbconnect.php') ?>