 <php
session_start();
include 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Ubuntu:wght@300&display=swap');

body{
    width:100%;
    height:100%;
    overflow: hidden;
    background-image: url("img/box.jpg");
    background-size: cover;
    font-family:'Poppins';
}
.headings{
    font-size:30px;
    font-weight: 500;
    text-align: center;
}
.title{
    margin-top:-10px;
    padding-bottom:10px;
}
.field{
    display:flex;
    width:100%;
    height:100%;
    flex-direction:column;
    justify-content:center;
    align-content:center;
}

.field-inner{
    align-self:center;
    padding: 25px 40px 60px 40px;
    height:350px;
    width:400px;
    border-radius: 30px;
    background-image: linear-gradient(#fff,#d3d3d3);
    box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 75);
}
.input-box{
    width:100%;
    height:40px;
    padding:20px;
}

#i2, #i3, #i4{
    padding-top:30px;
}
.s-bt{
    width:100%;
    height:40px;
    background-color:green;
    border: 1px green solid;
    color:white;
    font-size:large;
    font-weight:bold;
    border-radius:10px;
}
.s-bt:hover{
    cursor:pointer;
    background-color:#338022;
    tranisition: all 0.3s ease;
}
#data{
    margin-top:-40px;
}
    </style>
</head>
<body>
    <!-- <?php
    if(($_SESSION['success']==false)){
        echo '<script> alert("Login Failed !")</script>';
    }
    ?> -->
    <?php
        if(isset($_GET['success']) && !$_GET['success']){
            echo '<script> confirm("Registration Successfully");</script>';
            
        }
        elseif(isset($_GET['success']) && $_GET['success']){
            echo '<script> confirm("Operation Unuccessful");</script>';
        }
        ?>
    <div class="field">
        <div class="field-inner">
            <div class="title">
                <h4 class="headings">Please Login</h4>
            </div>
            <form action="validation.php" method="post">
                <div id="data">
                    <div class="input-box-div" id="i1">
                        <input type="text" name="Username" placeholder="Username" class="input-box" required ><br>
                    </div>

                    <div class="input-box-div" id="i2">
                        <input type="email" name="Email" placeholder="Email" class="input-box" required ><br>
                    </div>
                    
                    <div class="input-box-div" id="i3">
                        <input type="password" name="Pass" placeholder="Password" class="input-box" required ><br>
                    </div>

                    <div class="button" id="i4">
                        <input type="submit" name="Login" value="Login" class="s-bt">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>