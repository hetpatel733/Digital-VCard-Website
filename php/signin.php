<?php
    $email = trim($_POST['email']);
    $cpassword = trim($_POST['password']);
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = 'INSERT INTO `signin`(`email`,`password`) VALUES("'.$email.'","'.$cpassword.'")';
    $result = mysqli_query($conn, $sql);
    
    $que = "select * from signup  where email = '$email' and password = '$cpassword';";
    $data = mysqli_query($conn,$que);
    $rows = mysqli_num_rows($data);
    
    if ($rows != 0) {
        session_start();
        $_SESSION['email'] = $email;
        header('Location: ../dashboard.html');
        exit();
    }else{
        $inerror = "y";
        header("Location: ../signin.html?inerror=" . urlencode($inerror));
    }
?>