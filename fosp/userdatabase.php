<?php
$host="localhost";
$user="root";
$pass="";
$db="users";
$conn=mysqli_connect($host,$user,$pass,$db)or die();
// $sql="CREATE DATABASE users"; 
// mysqli_query($conn,$sql);
//  if(!$conn){
//   echo"Database not connected"; }
// else{
//     echo"Database connected successfully!";
//  }

// $sql="CREATE TABLE `users`.`user_info` ( `Sno` INT(6) NULL DEFAULT NULL AUTO_INCREMENT ,  `Full Name` VARCHAR(250) NULL DEFAULT NULL ,  `Email` VARCHAR(100) NULL DEFAULT NULL ,  `Contact` VARCHAR(12) NULL DEFAULT NULL ,  `Date` DATE NULL DEFAULT NULL ,  `No of Tickets` INT(12) NULL DEFAULT NULL ,  `Nationality` VARCHAR(100) NULL DEFAULT NULL ,  `Rounds` VARCHAR(50) NULL DEFAULT NULL ,    PRIMARY KEY  (`Sno`),    UNIQUE  `email` (`Email`))";
//      $result=mysqli_query($conn,$sql);
//      if($result){
//          echo"The table created";
//      }
//      else{  
//            echo"table not created".mysqli_error($conn);
//}
    
?>