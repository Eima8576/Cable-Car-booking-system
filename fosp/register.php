<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="stylereg.css">
      <!--link to font awesome-->
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

<style>
 /* .center .containers   .btn{
    align-self: center;
    color: white;
    background-color: purple;
    padding: 15px 10px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
    } */
    #bt1{
        /* margin-left:100px; */
    
        margin: 20px 0px 12px 110px;   
    }
  

    button{
     margin-top:-30px;
    color: white;
    background-color: rgb(170, 7, 170);
    padding: 10px 15px 10px 15px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
    width: 150px;
    
    }
</style>    
</head>
<body>

    <div class="center">
        <div class="containers">
            <a href="index.php"> <label class="close-btn fa fa-times"></label></a>
            <div class="title">Ticket Information</div>
            <p>Please provide the necessary information to buy your tickets</p>
            <form action="adduser.php" method="post">
                <div class="data">
                    <div class="input-box">
                        <span class="details">Full Name <sup>*</sup></span>
                        <input type="text" name="name" id="name" placeholder="Name" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Visit <sup>*</sup></span>
                        <input type="date" name="date" id="date" placeholder="Date of Visit" required >
                    </div> <div class="input-box">
                        <span class="details">Contact No <sup>*</sup></span>
                        <input type="text" name="contact" id="contact" placeholder="Contact No" required >
                    </div> 
                    <div class="input-box">
                        <span class="details">Email <sup>*</sup></span>
                        <input type="email" name="email" id="email" placeholder="Email" required >
                    </div>
                    <div class="input-box">
                        <span class="details">No of Tickets <sup>*</sup></span>
                        <input type="number" name="tickets" id="tickets" placeholder="No.of Tickets" required >
                    </div>
                    
                    <span class="opt">
                        Nationality:
                        <select name="Nationality" required><option value="Nepalese">Nepalese</option>
                        <option value="SAARC">SAARC</option>
                        <option  value="Chinese">Chinese</option>
                        <option  value="Foreigner">Foreigner</option>
                        </select>


                        Trip: 

                        <select name="rounds" required><option value="Two Way">Two Way</option>
                        <option value="One Way">One-Way</option>
                        </select>
                    </span>     
                    <div class="button">
                        <input type="submit" value="Register">
                    </div>
                 
                </div>
                
            </form>
            <a href="view.php"><button class="btn1" id="bt1"> View </button></a><br>
        </div>
    </div>
</body>
</html>