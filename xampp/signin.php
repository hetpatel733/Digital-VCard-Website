<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vcard";

$email = $_POST['email'];
$gpassword = $_POST['password'];


$conn = mysqli_connect($servername, $username, $password, $database);
$sql = 'INSERT INTO `signin`(`email`,`password`) VALUES("'.$email.'","'.$gpassword.'")';
$result = mysqli_query($conn, $sql);
echo("Control Panel")
?>