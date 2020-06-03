<?php
$username = $_POST["uname"];
$firstname = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["psw"];
$native = $_POST["lang1"];
$learn = $_POST["lang2"];
$servername = "localhost";
$usernam = "id13913676_admin";
$password = "Benya12152003!";
$dbname = "id13913676_langswap";
$conn = mysqli_connect($servername, $usernam, $password, $dbname);
if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}else{
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, firstname, email, pass, native, learn) values(?, ?, ?, ?, ?, ?)";
    
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
    
     
        $sql_u = "SELECT * FROM register WHERE username='$username'";
      	$sql_e = "SELECT * FROM register WHERE email='$email'";
      	$res_u = mysqli_query($conn, $sql_u);
      	$res_e = mysqli_query($conn, $sql_e);
    
      	if (mysqli_num_rows($res_u) > 0) {
      	  echo "<script>alert('Sorry... username already taken');</script>";
      	  echo "<script>window.location = 'index.php';</script>";
      	}else if(mysqli_num_rows($res_e) > 0){
      	  echo "<script>alert('Sorry... email already taken');</script>";
      	  echo "<script>window.location = 'index.php';</script>";
      	}else{
      	    if ($rnum == 0){
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssii", $username, $firstname, $email, $pass, $native, $learn);
                $stmt->execute();
                header("Location: mainPage.php");
      	    }
      	}
        
     $stmt->close();
     $conn->close();
}



?>
