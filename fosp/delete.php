<?php
    include'database.php';
    $id=$_GET['Sno'];
    $sql="DELETE FROM user_info Where Sno=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:view.php");
    }
?>