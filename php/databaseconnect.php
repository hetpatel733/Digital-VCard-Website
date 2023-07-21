<?php
include ('dbauth.php');

if (isset($_POST['submitfeedback'])) {
    include ('contact.php');
    
} elseif (isset($_POST['submitsignin'])){
    include ('signin.php');
    
} elseif (isset($_POST['submitsignup'])){
    include ('signup.php');
    
}else{
    echo("Something Went Wrong");
}
?>