<?php
    include('connection.php');
    if(isset($_POST['submit'])) {
        $UserID = $_POST['UserID'];
        $IDNumber = $_POST['password'];

        $sql = "SELECT * FROM users WHERE UserID = '$UserID' AND IDNumber = '$IDNumber'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1) {
            header("location:index.php");
        }
        else {
            echo '<script>
                window.location.href="pagelogin.php";
                alert("Login failed. UserID or password")
            </script>';
        }
    }
?>