<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutevent.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/image/logo.png">
    <title>About Event</title>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutevent.php"> About Event</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="ticket.php"><img src="/image/tic1.png" alt="ticket" width="60px"></a></li>
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
        <h1><center>Ab<span>out</span> Event</center></h1>
        <div class="aboutevent">
            <div class="first">
                <div class="img">
                    <img src="https://gcoconline.com/word/wp-content/uploads/2018/07/Pool-Party.png" alt="">
                </div>
                <div class="text">
                    <h3>POOL PARTY</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://lh3.googleusercontent.com/proxy/OqWEWLramlYv_GXJiN4gVETi8gwQ1pDdYs7wG_GZJ4l1KkWkygIfKkUsNZKR0laO-nzDWwvXk4TbgQrTQxlF5gnKN9wNuDA47_emuSdlQxBy3C8bOGU4YNWQeCbsnlMpwnSIi5AuAGN9MQFTsyLmsEYoTQ1h" alt="">
                </div>
                <div class="text">
                    <h3>Dj NIGHT</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://www.freeiconspng.com/uploads/drones-black-4.png" alt="">
                </div>
                <div class="text">
                    <h3>DRONE RACE</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://i.ya-webdesign.com/images/cars-transparent-png-2.png" alt="">
                </div>
                <div class="text">
                    <h3>ROBOT RACE</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://www.pinclipart.com/picdir/big/210-2103033_aliens-invasion-is-threatening-our-planet-entertainment-clipart.png" alt="">
                </div>
                <div class="text">
                    <h3>ROBOWAR</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://clipground.com/images/clip-art-of-slip-and-slide-8.png" alt="">
                </div>
                <div class="text">
                    <h3>SLIP AND SLIDE</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://i.ya-webdesign.com/images/applejack-mud-png-1.png" alt="">
                </div>
                <div class="text">
                    <h3>MUD BATH</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://i.pinimg.com/originals/96/70/07/9670076c67de81cfcb5ea852ddb62a1d.png" alt="">
                </div>
                <div class="text">
                    <h3>RAIN DANCE</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://cdn.pixabay.com/photo/2013/07/12/19/18/magic-154526__340.png" alt="">
                </div>
                <div class="text">
                    <h3>MAGIC SHOW</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://cdn.clipart.email/457e6bd9faa0c78747e43fd50ba14c51_kanes-castles-slippery-slide_600-240.png" alt="">
                </div>
                <div class="text">
                    <h3>PASS THE WIRE</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://cdn4.iconfinder.com/data/icons/circus-25/64/juggler-ball-circus-fun-juggle-juggling-festival-carnival-circus-512.png" alt="">
                </div>
                <div class="text">
                    <h3>JUGGLING WITH BALL</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
            <div class="first">
                <div class="img">
                    <img src="https://cdn.clipart.email/457e6bd9faa0c78747e43fd50ba14c51_kanes-castles-slippery-slide_600-240.png" alt="">
                </div>
                <div class="text">
                    <h3>BLOW THE GLASS TOWER</h3>
                    <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quae eos aut ad, blanditiis excepturi, obcaecati commodi dignissimos voluptatibus quia possimus soluta impedit tempore alias. Dignissimos enim beatae magni iste?</code>
                </div>
            </div>
        </div>

     <!-- Bottom help -->
     <div class="social">
         <div class="cont">
            <code>If You hav any Problem, feel free to call on <b>+91-8709052626</b> or, Leave us a message <b>posh@entertainment.com</b></code>
         </div>
         <div class="member">
            <a href="member.html"><b>Membership Form</b></a>
         </div>
         <div class="links">
            <ul>
                <li><a href="https://www.facebook.com/sabjiFarm/" alt="" width="35px"></a><img src="/image/facebook.png" alt="" width="35px"></li>
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