<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/image/logo.png">
    <title>Posh Production Entertainment</title>
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
                    <li><a href="ticket.html"><img src="/image/tic1.png" alt="ticket" width="60px"></a></li>
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
        <code><center>Register now for <b><span>FREE</span></b></center></code>
        <code><center>Buy Ticket now and get <b><span>50% off</span></b> </center></code>
        <!-- intro Landing page -->
        <div class="first">
            <div class="introimg1">
                <img src="https://anki.com/on/demandware.static/-/Library-Sites-anki-content-global/default/dw10c1ef59/gift-guide/vector-gift-guide-img.png" alt="introimg" >
            </div>
            <div class="introtext">
                <h1 class="logo">
                    <b><span>Tec</span>ho<span>ts</span>av</b>
                </h1>
                <h1 class="logo">
                    <b><span>20</span><span>20</span></b>
                </h1>
                <h3>Celebratin Techotsav at fantasia Water park</h3>
                <?php
                if (!isset($_SESSION['loggedin']))
                {
                    echo "<div class='introbtn'><a href='login.php'><button>Login</button></a><a href='register.php'><button>Register Now</button></a></div>";
                }
                else
                {
                    echo "<h class = 'wlcmnote'><center>Welcome, ".$_SESSION['name']."</center></h>";
                }
                ?>
            </div>
            <div class="introimg">
                <img src="https://anki.com/on/demandware.static/-/Library-Sites-anki-content-global/default/dw10c1ef59/gift-guide/vector-gift-guide-img.png" alt="introimg" >
            </div>
        </div>

     <!-- Bottom help -->
     <div class="social">
         <div class="cont">
            <code>If You hav any Problem, feel free to call on <b>+91-8709052626</b> or, Leave us a message <b>posh@entertainment.com</b><br>Techotsav 2020 is organised by POSH PRODUCTION ENTERTAINMENT PVT LTD.</code>
         </div>
         <div class="member">
            <a href="member.html"><b>Membership Form</b></a>
         </div>
         <div class="links">
            <ul>
                <li><a href="https://www.facebook.com/sabjiFarm/" alt="" width="35px"><img src="/image/facebook.png" alt="" width="35px"></a></li>
                <li><a href="https://www.facebook.com/sabjiFarm/"><img src="/image/instagram.png" alt="" width="35px"></a></li>
                <li><a href="https://www.facebook.com/sabjiFarm/"><img src="/image/teligram.png" alt="" width="35px"></a></li>
                <li><a href="https://www.facebook.com/sabjiFarm/"><img src="/image/whatsapp.png" alt="" width="35px"></a></li>
            </ul>
         </div>
     </div>
     

    <script src="script.js">
        function myFunction(){
  document.getElementById("dpc").classList.toggle("show");
}
    </script>
</body>
</html>