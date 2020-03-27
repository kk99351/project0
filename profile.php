<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/image/logo.png">
    <title>Profile</title>
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
                        <li><a href ="logout.php">Logout</a></li>
                        <?php 
                        echo "<li class= 'profil'><a href = 'profile.php'><img src = '#' height ='50' width ='50'> ".$_SESSION['name']."</a></li>";
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
                    <li><a href ="logout.php">Logout</a></li>
                    <?php 
                        echo "<li class= 'profil'><a href = 'profile.php'><img src = '#' height ='50' width ='50'> ".$_SESSION['name']."</a></li>";
                        ?>
                </ul>
            </div>
        </div>
        <?php
        echo "</br></br><div><center><img src = '#' height = '250' width = '250' ></center></div></br></br></br><p class = 'tstvid' ><center>".$_SESSION['tstvid']."</center></p><p class = 'name' ><center>".$_SESSION['name']."</center></p>";
        function serverr($errno, $errstr, $errfile, $errline) 
        {
            echo "<p class = 'notice'><center>Couldn't fetch email!</center></p>";
        }
        function lserverr($errno, $errstr, $errfile, $errline) 
        {
        }
        set_error_handler("serverr");
        if (include('dbcred.php'))
        {
            if ($con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME))
            {
                if ($stmt = $con->prepare('SELECT email FROM accounts WHERE tstvid = ?')) 
                {
                    $stmt->bind_param('s', $_SESSION['tstvid']);
                    if ($stmt->execute())
                    {
                        // Store the result so we can check if the account exists in the database.
                        if ($stmt->store_result())
                        {
                            if ($stmt->num_rows > 0) 
                            {
                                $stmt->bind_result($email);
                                $stmt->fetch();
                                echo "<p class = 'email' ><center>$email</center></p>";
                            }
                        }
                        else
                        {
                            trigger_error("err");
                        }
                    }
                    else
                    {
                        trigger_error("err");
                    }
                    $stmt->close();
                }
                set_error_handler("lserverr");
                $con->close();
            }
        }
        ?>
            <script src="script.js">
        function myFunction(){
  document.getElementById("dpc").classList.toggle("show");
}
    </script>
    </div>
</body>
</html>