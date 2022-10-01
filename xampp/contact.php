<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vcard";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

  // Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

  // Submit these to a database
  // Sql query to be executed 
$sql = 'INSERT INTO `contactus`(`firstname`,`lastname` ,`email`,`subject`,`comment`) VALUES ("'.$firstname.'", "'.$lastname.'", "'.$email.'", "'.$subject.'","'.$comment.'")';
$result = mysqli_query($conn, $sql);

if($result){
    echo "Your response is recorded succesfully";
}else{
    die(mysqli_error($con));
}
?>