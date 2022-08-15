<!-- <?php
       include 'database.php';
       session_start();
       $_SESSION['Username']=$_POST['Username'];
       $_SESSION['Email']=$_POST['Email'];
       $_SESSION['Password']=$_POST['Pass'];
       $_SESSION['authuser']=0;
   
       //check username and password information
   
       if (($_SESSION['Username']=='Admin') and
           ($_SESSION['Email']=='eimalama1023@gmail.com')and ($_SESSION['Password']=='yibo143')){
           $_SESSION['authuser']=1;
           header('location:admin.php');
       }
   
       else{     
         $success ='false';
        echo '<script>alert("Unauthicated!")</script>';
        header('location:login.php?success='.$success); 
       }     
    mysqli_close($conn);
    ?>