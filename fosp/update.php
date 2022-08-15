<!-- <?php
//  include'database.php';
//  $id=$_GET['Sno'];
            
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
        

// $sql="UPDATE `user_info` SET `Full Name`='$name',`Email`='$email',`Contact`='$contact',`Date`='$date',`No of Tickets`='$tickets',`Nationality`='$nationality',`Rounds`='$rounds' WHERE `Sno`=$id";
// //  echo"age is".$date."gender is".$gender;
// $result=mysqli_query($conn, $sql);
//  if($result){
    
//          echo"Data updated successfully!";
//          header("location:view.php");
//         }
//         else{
//             mysqli_error($conn);
//         }
//      }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="stylereg.css">
</head>
<body>

    <div class="center">
        <div class="containers">
           <a href="index.php"> <label class="close-btn fa fa-times"></label></a>
            <div class="title">Update the Information</div>
            <p>Please provide the data to update information</p>

            <?php
                include'database.php';
                $id=$_GET['Sno'];
               
               $sql="SELECT *FROM user_info WHERE Sno =".$id;
               $result=mysqli_query($conn,$sql);

               if($result){
                   $row= mysqli_fetch_assoc($result);
    
                   $name=$row['Full Name'];
                   $email=$row['Email'];
                   $contact=$row['Contact'];
                   $date=$row['Date'];
                   $tickets=$row['No of Tickets'];
                   $nationality=$row['Nationality'];
                   $rounds=$row['Rounds'];
            
            
               }
    ?>

            <form action="action.php" method="post">
                <div class="data">
                    <div class="input-box">
                        <span class="details">Full Name <sup>*</sup></span>
                        <input type="text" name="name" id="name" value="<?php global $name; echo $name?>"placeholder="Name" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Visit <sup>*</sup></span>
                        <input type="date" name="date" id="date" value="<?php global $date; echo $date?>" placeholder="Date of Visit" required >
                    </div> <div class="input-box">
                        <span class="details">Contact No <sup>*</sup></span>
                        <input type="text" name="contact" id="contact" value="<?php global $contact; echo $contact?>"placeholder="Contact No" required >
                    </div> 
                    <div class="input-box">
                        <span class="details">Email <sup>*</sup></span>
                        <input type="email" name="email" id="email"value="<?php global $email; echo $email?>" placeholder="Email" required >
                        <input type="hidden" name="Sno" id="Sno"  value="<?php global $id; echo $id?>" placeholder="Enter your E-mail" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No of Tickets <sup>*</sup></span>
                        <input type="number" name="tickets" id="tickets" value="<?php global $tickets; echo $tickets?>"placeholder="No.of Tickets" required >
                    </div>
                    
                <span class="opt">
            Nationality:
             <select name="Nationality" value="<?php global $nationality; echo $nationality?>" required><option value="Nepalese">Nepalese</option>
            <option value="SAARC">SAARC</option>
            <option  value="Chinese">Chinese</option>
            <option  value="Foreigner">Foreigner</option>
            </select>


                Trip: 

                    <select name="rounds" value="<?php global $rounds; echo $rounds?>" required><option value="Two Way">Two Way</option>
                        <option value="One Way">One-Way</option>
                        </select>
                </span>     
                 <div class="button">
                    <input type="submit" value="Update">
                 </div>
           
                </div>
            </form>
        </div>
    </div>
</body>
</html>