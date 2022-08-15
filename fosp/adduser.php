<?php
include 'database.php';
$name=$_POST['name'];
$date=$_POST['date'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$tickets=$_POST['tickets'];
$nationality=$_POST['Nationality'];
$rounds=$_POST['rounds'];
$sql="INSERT INTO `user_info`( `Full Name`, `Email`, `Contact`, `Date`, `No of Tickets`, `Nationality`, `Rounds`) VALUES ('$name','$email','$contact','$date','$tickets','$nationality','$rounds')";
    $result= mysqli_query($conn, $sql);
    if($result){
        echo"Data entered successfully!";
        header('location:view.php');
       }
       else{
           mysqli_error($conn);
       }

?>