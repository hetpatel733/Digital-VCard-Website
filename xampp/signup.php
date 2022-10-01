<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vcard";

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


  // Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

  // Submit these to a database
  // Sql query to be executed 
$sql = "INSERT INTO `signup`(`fname`,`lname` ,`uname`,`email`,`password`,`cpassword`,`caddress`,`paddress`,`gender`,`city`,`cnumber`,`pincode`) VALUES ('$fname', '$lname', '$uname', '$email', '$gpassword', '$cpassword', '$caddress', '$paddress', '$gender', '$city', '$cnumber', '$pincode')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Your response is recorded succesfully";
}else{
    die(mysqli_error($con));
}
?>