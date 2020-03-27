<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutus.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/image/logo.png">
    <title>About Us</title>
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
        
        <div class="aboutus">
            <h1><center>Our Team Members</center></h1>
            <div class="team">
                <div class="member">
                    <div class="memberimg">
                        <img src="/image/shubham.jpg" alt="memberimg" >
                    </div>
                    <div class="membertext">
                        <h3>Viplav Singh</h3>
                        <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aperiam totam quibusdam consectetur assumenda ex reiciendis illum laborum hic maiores aliquid repellat autem itaque magni, optio in repellendus sapiente. Quisquam!</code>
                    </div>
                </div>
                <div class="member">
                    <div class="memberimg">
                        <img src="/image/shubham.jpg" alt="memberimg" >
                    </div>
                    <div class="membertext">
                        <h3>Shubham Raj</h3>
                        <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid culpa quisquam, alias quia aspernatur quod dolor odit voluptates officia quae harum suscipit atque provident. Ut ab architecto at similique maxime?</code>
                    </div>
                </div>
                <div class="member">
                    <div class="memberimg">
                        <img src="/image/shubham.jpg" alt="memberimg" >
                    </div>
                    <div class="membertext">
                        <h3>Aryan Chandra</h3>
                        <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid culpa quisquam, alias quia aspernatur quod dolor odit voluptates officia quae harum suscipit atque provident. Ut ab architecto at similique maxime?</code>
                    </div>
                </div>
            </div>
            <div class="team">
                <div class="member">
                    <div class="memberimg">
                        <img src="/image/shubham.jpg" alt="memberimg" >
                    </div>
                    <div class="membertext">
                        <h3>Ayush Mishra</h3>
                        <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid culpa quisquam, alias quia aspernatur quod dolor odit voluptates officia quae harum suscipit atque provident. Ut ab architecto at similique maxime?</code>
                    </div>
                </div>
                <div class="member">
                    <div class="memberimg">
                        <img src="/image/shubham.jpg" alt="memberimg">
                    </div>
                    <div class="membertext">
                        <h3>Aishani kasyap</h3>
                        <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid culpa quisquam, alias quia aspernatur quod dolor odit voluptates officia quae harum suscipit atque provident. Ut ab architecto at similique maxime?</code>
                    </div>
                </div>
                <div class="member">
                    <div class="memberimg">
                        <img src="/image/shubham.jpg" alt="memberimg">
                    </div>
                    <div class="membertext">
                        <h3>Trypti</h3>
                        <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid culpa quisquam, alias quia aspernatur quod dolor odit voluptates officia quae harum suscipit atque provident. Ut ab architecto at similique maxime?</code>
                    </div>
                </div>
            </div>
            <div class="team">
                <div class="member">
                    <div class="memberimg">
                        <img src="/image/shubham.jpg" alt="memberimg" >
                    </div>
                    <div class="membertext">
                        <h3>Dhananjai</h3>
                        <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid culpa quisquam, alias quia aspernatur quod dolor odit voluptates officia quae harum suscipit atque provident. Ut ab architecto at similique maxime?</code>
                    </div>
                </div>
            </div>
            
        </div>

     

    <script src="script.js">
        function myFunction(){
  document.getElementById("dpc").classList.toggle("show");
}
    </script>
</body>
</html>