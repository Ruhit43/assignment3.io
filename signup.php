 <?php

 session_start();
 header('location:index.html');

include 'connection.php';

if(isset($_POST['done'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sid = $_POST['SID'];
    $email = $_POST['email'];
    $slot = $_POST['slot'];
 
 
 $query1 = "INSERT INTO `user`(`fname`,`lname`,`SID`,`email`,`slot`) VALUES ('$fname','$lname', '$sid', '$email', '$slot')";
 $query = mysqli_query($connection,$query1);
 $q = "UPDATE `slots` SET `seats`= (seats - 1) WHERE `slot`= '$slot' ";
 $query1 = mysqli_query($connection,$q);
}
?>
