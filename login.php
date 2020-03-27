<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	header('Location: index.php');
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
    <title>Log-in</title>
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
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                        
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
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
        <h1><center>L<span>og</span>-in</center></h1>
<?php
if (isset($_POST["tstvid"]) && (!empty($_POST["tstvid"])))
{
    if (isset($_POST["password"]) && (!empty($_POST["password"])))
    {
        function serverr($errno, $errstr, $errfile, $errline) 
        {
            echo "<p class = 'notice'><center>Couldn't fetch server,Please try to login later</center></p>";
        }
        function lserverr($errno, $errstr, $errfile, $errline) 
        {
        }
        set_error_handler("serverr");
        if (include('dbcred.php'))
        {
            if ($con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME))
            {
                if ($stmt = $con->prepare('SELECT name, password FROM accounts WHERE tstvid = ?')) 
                {
                    $stmt->bind_param('s', $_POST['tstvid']);
                    if ($stmt->execute())
                    {
                        // Store the result so we can check if the account exists in the database.
                        if ($stmt->store_result())
                        {
                            if ($stmt->num_rows > 0) 
                            {
                                $stmt->bind_result($name, $password);
                                $stmt->fetch();
                                // Account exists, now we verify the password.
                                // Note: remember to use password_hash in your registration file to store the hashed passwords.
                                if (password_verify($_POST['password'], $password)) {
                                    // Verification success! User has loggedin!
                                    // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
                                    session_regenerate_id();
                                    $_SESSION['loggedin'] = TRUE;
                                    $_SESSION['tstvid'] = $_POST['tstvid'];
                                    $_SESSION['name'] = $name;
                                $_SESSION['spname'] = $name;
                                if (strlen($name)>12)
                                {
                                    $_SESSION['spname'] = substr($name,0,8)."...";
                                }
                                    header('Location: index.php');
                                } 
                                else 
                                {
                                echo "<p class = 'notice'><center>Incorrect password or username!</center></p>";
                                }
                            }
                            else
                            {
                            echo "<p class = 'notice'><center>Incorrect password or username</center></p>";
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
    }
}
?>
        <div class="login">
            <form action="" method="POST" >
                <div class="inputfield">
                    <label for="fname"><code>Techotsav Id</code></label>
                    <input type="text" id="name" name="tstvid" required>
                </div>
                <div class="inputfield">
                    <label for="number"><code>Password</code></label>
                    <input type="password" name="password" required>
                </div>
                <div class="btn">
                    <button>Log-in</button>
                </div>
            </form>
        </div>

    <script src="script.js">
        function myFunction(){
  document.getElementById("dpc").classList.toggle("show");
}
    </script>
    </div>
</body>
</html>