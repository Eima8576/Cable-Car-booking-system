<?php
 include'database.php';
 $id=$_POST['Sno'];
 $id=$_POST['Sno'];
 $name=$_POST['name'];
 $date=$_POST['date'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $tickets=$_POST['tickets'];
 $nationality=$_POST['Nationality'];
 $rounds=$_POST['rounds'];   
// if(isset($_POST['submit']))
// {

//      $id=$_POST['Sno'];
//      $name=$_POST['name'];
//      $date=$_POST['date'];
//      $email=$_POST['email'];
//      $contact=$_POST['contact'];
//      $tickets=$_POST['tickets'];
//      $nationality=$_POST['Nationality'];
//      $rounds=$_POST['rounds'];
        

$sql="UPDATE `user_info` SET `Full Name`='$name',`Email`='$email',`Contact`='$contact',`Date`='$date',`No of Tickets`='$tickets',`Nationality`='$nationality',`Rounds`='$rounds' WHERE `Sno`=$id";

$result=mysqli_query($conn, $sql);
 if($result){
    
         echo"Data updated successfully!";
         header("location:view.php");
        }
        else{
            mysqli_error($conn);
        }
?>