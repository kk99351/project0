<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="member.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/image/logo.png">
    <title>Membership Form</title>
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
        
        <div class="form">
            <div class="intro">
                <h1 class="logo"><span>Posh Production</span> Entertainment <span> PVT </span> LTD.</h1>
                <hr>
                <code>Vijay Nagar 8m23, Kankarbagh-800026, Patna(BIHAR)</code>
                <img src="https://i.dlpng.com/static/png/6635478_preview.png" alt="" width="200px">
            </div>
            <h3><center>Membership Request Form</center></h3>
<?php
if (isset($_POST["email"]) && (!empty($_POST["email"])))
{
    if (isset($_POST["number"]) && (!empty($_POST["number"])))
    {
        if (isset($_POST["name"]) && (!empty($_POST["name"])))
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
                    if ($stmt = $con->prepare('SELECT number FROM members WHERE email = ?')) 
                    {
                        $stmt->bind_param('s', $_POST['email']);
                        if ($stmt->execute())
                        {
                            if ($stmt->store_result())
                            {
                                if ($stmt->num_rows > 0)
                                {
                                    echo "<p class = 'notice'><center>You have registered with this email!</center></p>";
                                }
                                else
                                {
                                    if ($stmt = $con->prepare('INSERT INTO members (name, age, gender, number, altnumber, email, education, profession, id, idno, eventname, associate, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) 
                                    {
                                        $stmt->bind_param('sssssssssssss', $_POST['name'], $_POST['age'], $_POST['gender'], $_POST['number'], $_POST['altnumber'], $_POST['email'], $_POST['education'], $_POST['profession'], $_POST['id'], $_POST['idno'], $_POST['eventname'], $_POST['associate'], $_POST['address']);
                                        if ($stmt->execute())
                                        {
                                            function mailerr($errno, $errstr, $errfile, $errline) 
                                            {
                                                echo "<p class = 'notice'><center>E-mail hasn't been send but you have successfully registered,we will reach you soon</center></p>";
                                            }
                                            set_error_handler("mailerr");
                                            if (include('email.php'))
                                            {
                                                if ($included)
                                                {
                                                    $userbody = "<p>Hello,</p><p>".$_POST['name']." You have successfully registered for techotsav membership,We will reach you soon</p>";
                                                    $usersbody = "Hello,". $_POST['name']."You have successfully registered for techotsav membership,We will reach you soon";
                                                    $usersubject = "Membership Notice";
                                                    $usermsg = "<p class = 'notice '><center>You have successfully registered,we will reach you soon</center></p>";
                                                    $devbody = "<p>Name: ".$_POST['name']."</p><p>Age :".$_POST['age']."</p><p>Gender :".$_POST['gender']."</p><p>E-mail: ".$_POST['email']."</p><p>Number: ".$_POST['number']."</p><p>Alt-Number: ".$_POST['altnumber']."</p><p>Id: ".$_POST['id'].",".$_POST['idno']."</p><p>Education: ".$_POST['education']."<p></p>Associate: ".$_POST['associate']."<p></p>Event Name: ".$_POST['eventname']."</p><p>Profession: ".$_POST['profession']."</p><p>Address: ".$_POST['address']."</p>";
                                                    $devsbody = "Name: ".$_POST['name'].",Age :".$_POST['age'].",Gender :".$_POST['gender'].",E-mail: ".$_POST['email'].",Number: ".$_POST['number'].",Alt-Number: ".$_POST['altnumber'].",Id: ".$_POST['id'].",".$_POST['idno'].",Education: ".$_POST['education'].",Associate: ".$_POST['associate'].",Event Name: ".$_POST['eventname'].",Profession: ".$_POST['profession'].",Address: ".$_POST['address'];
                                                    $devsubject = "New Membership Registration Notice";
                                                    sendmailuser($_POST['email'],$userbody,$usersbody,$usersubject,"",$usermsg);
                                                    sendmaildev($devbody,$devsbody,$devsubject);
                                    
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
     set_error_handler("serverr");
                                    
                                        }
                                        else
                                        {
                                            trigger_error("err");
                                
                                        }
                                    
                                    }
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
}
?>
            <form action="" method="POST" >
                <div class="inputfield">
                    <label for="fname"><code>Full Name</code></label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="inputfield">
                    <label for="age"><code>Date Of Birth (D.O.B) </code></label>
                    <input type="text" id="age" name="age" placeholder="dd/mm/yyyy" required>
                </div>
                <div class="inputfield">
                    <label for="gender"><code>Sex</code></label>
                    <div class="custumselect">
                        <select name="gender" id="associate">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="number"><code>Phone No.</code></label>
                    <input type="number" name="number" required>
                </div>
                <div class="inputfield">
                    <label for="number"><code>Alternative Phone No.</code></label>
                    <input type="number" name="altnumber" >
                </div>
                <div class="inputfield">
                    <label for="email"><code>E-Mail Address</code></label>
                    <input type="email" name="email" required>
                </div>
                <div class="inputfield">
                    <label for="edu"><code>Higest Educational Qualification</code></label>
                    <input type="text" name="education" required>
                </div>
                <div class="inputfield">
                    <label for="profession"><code>Profession</code></label>
                    <input type="text"  name="profession" required>
                </div>
                <div class="inputfield">
                    <label for="doctype"><code>Document Type</code></label>
                    <div class="custumselect">
                        <select name="id" id="associate">
                            <option value="aadhar">Aadhaar Card</option>
                            <option value="pan">PAN Card</option>
                            <option value="licence">Driving Licence</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="number"><code>Document No.</code></label>
                    <input type="text" name="idno" required>
                </div>
                <div class="inputfield">
                    <label for="eventname"><code>Event Name</code></label>
                    <div class="custumselect">
                        <select name="eventname" id="associate">
                            <option value="techotsav" >Techotsav</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="eventname"><code>Assosiate Type</code></label>
                    <div class="custumselect">
                        <select name="associate" id="associate">
                            <option value="member">Member</option>
                            <option value="sponser">Sponser</option>
                            <option value="investor">Invester</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="address"><code>Current Address</code></label>
                    <input class="address" name="address" required>
                </div>
                <div class="term">
                    <label class="checkbox">
                        <input type="checkbox" class="checkbox" required>
                    </label>
                    <p><code>Agreed to </code><div id="popup" onclick="myFunction1()">  <code style="font-size: 15px;">Terms & Condition </code></div>
                    <div class="popuptext" id="pop" >
                        I hereby submity my willingness to participate as a member in the <b>TECHOTSAV</b> event of the company. I declare that I am not having any criminal proceeding against me nor I have any criminal record in the past. Further I agree to fulfill to the company any loss which may directly or indirectly,hamper the functioning of the event under consideration.
                    </div>
                      </div></p>
                </div>
                <div class="btn">
                    <button>Register</button>
                </div>
            </form>
        </div>

    <script src="script.js">
        function myFunction(){
  document.getElementById("dpc").classList.toggle("show");
}
function myFunction(){
  document.getElementById("pop").classList.toggle("show");
}
    </script>
</body>
</html>