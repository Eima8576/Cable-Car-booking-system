<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <link rel="stylesheet" href="style.css">
    <!--link to font awesome-->
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <style>
            
table{
    width:90%;
    border-collapse:collapse;
    text-align:left;
    padding-bottom:10px;
}
.content-table thead tr{
    font-size:18px;
    background-color:rgb(136,6,169,1);
    color:#ecf0f1;
    text-align:left;
    height:60px;
}
.content-table td a{
    color: black;
    text-decoration:none;
}
.content-table th,.content-table td{
    padding:10px;
    padding-left:15px
}
table tbody tr{
    border-bottom:1px solid blue;
}
.content-table tbody tr:nth-of-type(even){
    background-color:rgb(122,6,180,1);
}
        </style>
</head>
<body>
<header>
        <img class="logo" src="img/logor.png" alt="logo" width="60px">
                <nav class="head">
                    <ul class="nav_links">
                        </li>
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="photos.php"><i class="fa fa-camera"></i> Photos</a></li>
                        <li><a href="aboutus.php"><i class="fa fa-question-circle"></i> About Us</a></li>
                        <li><a href="login.php"><i class="fa fa-group"></i> Admin Login</a></li>
                      </ul>
                </nav>
            <div id="nav-button">
                <a href="register.php" class="cts"><button>Booking</button></a>
             </div>
    </header>
<center>
        <table class="content-table" width="1366px"cellspacing="0">
         <thead>
        <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Date of Visit</th>
        <th>No.of Tickets</th>
        <th>Nationality</th>
        <th>Rounds</th>>
        <th>Action</th>
        </tr>
        </thead>
      <tbody>
        <?php
        include 'database.php';
        $sql="SELECT * FROM `user_info`";
        $result=mysqli_query($conn,$sql);
        if($result){
           while($row=mysqli_fetch_assoc($result)) {
               $id=$row['Sno'];
               $name=$row['Full Name'];
               $email=$row['Email'];
               $contact=$row['Contact'];
               $date=$row['Date'];
               $tickets=$row['No of Tickets'];
               $nationality=$row['Nationality'];
               $rounds=$row['Rounds'];
        
        ?>
            <tr>
                <td><?php echo $name?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $contact ?></td>
                <td><?php echo $date?></td>
                <td><?php echo $tickets ?></td>
                <td><?php echo $nationality ?></td>
                <td><?php echo $rounds ?></td>
                <td> <a href="update.php?Sno=<?php echo$id?>">Update</a>

            </td>
           </tr>
           <?php
           }
          
        }   ?>
      </tbody>
</table>
    </center>
    </div>
    <footer class="footer">
        <div class="content">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Report</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Booking</h4>
                    <ul>
                        <li><a href="register.php">Book Now</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                  <a href="https://www.facebook.com/cablecarmanakamana/"><i class="fa fa-facebook-f"></i></a>
                 <a href="https://www.instagram.com/cablecarmanakamana/?hl=en"><i class="fa fa-instagram"></i></a>
                <a href="https://www.tripadvisor.com/Attraction_Review-g1934802-d2154069-Reviews-Manakamana_Cable_Car-Kurintar_Narayani_Zone_Central_Region.html"><i class="fa fa-tripadvisor"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy"> <p>Copyright &copy;Eima Lama All Rights Reserved</p></div>
</body>
</html>