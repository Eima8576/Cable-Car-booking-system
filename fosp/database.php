<?php
$host="localhost";
$user="root";
$pass="";
$db="Login";
$conn=mysqli_connect($host,$user,$pass,$db)or die();
//for admin login
//$sql="CREATE DATABASE Login"; 
//mysqli_query($conn,$sql);
// if(!$conn){
//     echo"Database not connected";
// }
// else{
//     echo"Database connected successfully!";
// }
// $sql="CREATE TABLE `admin_info` (
//     `Username` VARCHAR(255) NOT NULL, 
//     `Email` VARCHAR(50) NOT NULL UNIQUE, 
//     `Password` VARCHAR(255) NOT NULL,
//     PRIMARY KEY(`Email`))";
//     $result=mysqli_query($conn,$sql);
//     if($result){
//         echo"The table created";
//     }
//     else{
//         echo"table not created".mysqli_error($conn);
//     }
// $sql="INSERT INTO `admin_info`(`Username`,`Email`, `Password`) VALUES ('Admin','eimalama1023@gmail.com','yibo143')";
//     $result= mysqli_query($conn, $sql);
//     if($result){
//         echo"Data entered successfully!";
//         header('location:index.php');
//        }
//        else{
//            mysqli_error($conn);
//        }

// $sql="CREATE TABLE `Login`.`user_info` ( `Sno` INT(6) NULL DEFAULT NULL AUTO_INCREMENT ,  `Full Name` VARCHAR(250) NULL DEFAULT NULL ,  `Email` VARCHAR(100) NULL DEFAULT NULL ,  `Contact` VARCHAR(12) NULL DEFAULT NULL ,  `Date` DATE NULL DEFAULT NULL ,  `No of Tickets` INT(12) NULL DEFAULT NULL ,  `Nationality` VARCHAR(100) NULL DEFAULT NULL ,  `Rounds` VARCHAR(50) NULL DEFAULT NULL ,    PRIMARY KEY  (`Sno`),    UNIQUE  `email` (`Email`))";      $result=mysqli_query($conn,$sql);
//      if($result){
//          echo"The table created";
//       }
//      else{  
//            echo"table not created".mysqli_error($conn);
// }
    
 ?>