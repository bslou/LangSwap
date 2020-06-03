<?php
$username = $_POST["username"];
$pass = $_POST["psw"];
    $servername = "localhost";
    $usernam = "id13913676_admin";
    $password = "Benya12152003!";
    $dbname = "id13913676_langswap";
    $conn = mysqli_connect($servername, $usernam, $password, $dbname);
    $sql_u = "SELECT * FROM register WHERE username='$username'";
    $sql_e = "SELECT * FROM register WHERE password='$pass'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);
    
    if ((mysqli_num_rows($res_u)) > 0 && (mysqli_num_rows($res_e) > 0)) {
        header("Location: mainPage.php");
    }else{
        echo "<script>alert('Username or password is incorrect');</script>";
        echo "<script>window.location = 'index.php';</script>";
    }
?>
