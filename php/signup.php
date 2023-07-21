<?php
    // echo "<script type='text/javascript' src='../index.js'></script>";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $gpassword= $_POST['password'];
    $cpassword= $_POST['cpassword'];
    $caddress = $_POST['caddress'];
    $paddress = $_POST['paddress'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $cnumber = $_POST['cnumber'];
    $pincode = $_POST['pincode'];
    
    
    //Real login system testing
    $que = "select * from signup  where email = '$email' ";
    $data = mysqli_query($conn,$que);
    $rows = mysqli_num_rows($data);
    
    if ($rows != 0) {
        $uperror = "y";
        header("Location: ../signin.html?uperror=" . urlencode($uperror));
    }else {
    
        $sql = "INSERT INTO `signup`(`fname`,`lname` ,`uname`,`email`,`password`,`cpassword`,`caddress`,`paddress`,`gender`,`city`,`cnumber`,`pincode`) VALUES ('$fname', '$lname', '$uname', '$email', '$gpassword', '$cpassword', '$caddress', '$paddress', '$gender', '$city', '$cnumber', '$pincode')";
        $result = mysqli_query($conn, $sql);
        header('Location: ../signin.html');
        exit();
    }
    ?>