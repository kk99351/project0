<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactus.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/image/logo.png">
    <title>Contact Us</title>
</head>
<body>
    <!-- particles.js container -->
     <div id="particles-js">
     </div> 

     <!-- Main Container -->
     <div class="main">
        <!-- Nav bar -->
        <div class="nav">
            <div class="logo">
                <img src="/image/logo.png" alt="logo" width="40px">
            </div>
             <!-- Menu For Mobile Phone Design-->
            <div class="menu">
                <img src="/image/menuw.png" alt="menu" width="40px" class="men" onclick="myFunction()" id="men">
                <div class="dpcontent" id="dpc">
                    <ul>
                        <li><a href="ticket.php"><img src="/image/tic1.png" alt="ticket" width="80px"></a></li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutevent.php">About Event</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="member.php">Membership Form</a></li>
                        <?php
                        if (!isset($_SESSION['loggedin']))
                        {
                            echo "<li><a href='register.php'>Register</a></li><li><a href='login.php'>Login</a></li>";
                        }
                        else
                        {
                            echo "<li><a href ='logout.php'>Logout</a></li><li class = 'profil'><a href='profile.php'><img src = '#' height ='50' width ='50'> ".$_SESSION['spname']."</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- Menu For Laptop Design -->
            <div class="items">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutevent.php"> About Event</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="ticket.php"><img src="/image/ticket.png" alt="ticket" width="60px"></a></li>
                    <li><a href="member.php">Membership Form</a></li>
                    <?php
                    if (!isset($_SESSION['loggedin']))
                    {
                        echo "<li><a href='register.php'>Register</a></li><li><a href='login.php'>Login</a></li>";
                    }
                    else
                    {
                        echo "<li><a href ='logout.php'>Logout</a></li><li class = 'profil'><a href='profile.php'><img src = '#' height ='50' width ='50'> ".$_SESSION['spname']."</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        
        <div class="contact">
            <h1><center>Contact Us</center></h1>
            <h3><center>If you have any query, feel free to call us</center></h3>
            <h1 class="logo"><center><span>+91-8709052626</span></center></h1>
            <h3><center>Or</center></h3>
            <h3><center>Feel free to massege us on our social network</center></h3>
        </div>
        <div class="links">
            <ul>
                <li><a href="https://www.facebook.com/sabjiFarm/" alt="" width="35px"><img src="/image/facebook.png" alt="" width="35px"></a></li>
                <li><a href="https://www.facebook.com/sabjiFarm/"><img src="/image/instagram.png" alt="" width="35px"></a></li>
                <li><a href="https://www.facebook.com/sabjiFarm/"><img src="/image/teligram.png" alt="" width="35px"></a></li>
                <li><a href="https://www.facebook.com/sabjiFarm/"><img src="/image/whatsapp.png" alt="" width="35px"></a></li>
            </ul>
         </div>

     
     

    <script src="script.js">
         function myFunction(){
  document.getElementById("dpc").classList.toggle("show");
}
    </script>
</body>
</html>