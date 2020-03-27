<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/image/logo.png">
    <title>Register</title>
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
                        <li><a href="ticket.html"><img src="/image/tic1.png" alt="ticket" width="80px"></a></li>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutevent.html">About Event</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                        <li><a href="member.html">Membership Form</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="login.html">Login</a></li>
                        
                    </ul>
                </div>
            </div>
            <!-- Menu For Laptop Design -->
            <div class="items">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutevent.html"> About Event</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="ticket.html"><img src="/image/tic1.png" alt="ticket" width="60px"></a></li>
                </ul>
            </div>
        </div>
        <h1><center>Regi<span>ster</span> for TECHOTSAV 2020</center></h1>
        <div class="register">
            <form action="" method="POST" >
                <div class="inputfield">
                    <label for="fname"><code>Full Name</code></label>
                    <input type="text" id="name" name="entry.2005620554" required>
                </div>
                <div class="inputfield">
                    <label for="age"><code>Date Of Birth (D.O.B) </code></label>
                    <input type="text" id="age" name="entry.1655337805" placeholder="dd/mm/yyyy" required>
                </div>
                <div class="inputfield">
                    <label for="gender"><code>Sex</code></label>
                    <div class="custumselect">
                        <select name="associate" id="associate">
                            <option value="">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="number"><code>Phone No.</code></label>
                    <input type="number" name="entry.1166974658" required>
                </div>
                <div class="inputfield">
                    <label for="email"><code>E-Mail Address</code></label>
                    <input type="email" name="entry.1045781291" required>
                </div>
                <div class="inputfield">
                    <label for="doctype"><code>Profession</code></label>
                    <div class="custumselect">
                        <select name="associate" id="associate">
                            <option value="male">Student</option>
                            <option value="male">Employe</option>
                            <option value="male">Other</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="address"><code>School/College Name</code></label>
                    <input class="address" name="entry.1556273043" >
                </div>
                <div class="inputfield">
                    <label for="eventname"><code>Event Name</code></label>
                    <div class="custumselect">
                        <select name="associate" id="associate">
                            <option value="male" >Techotsav</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="address"><code>Address</code></label>
                    <input class="address" name="entry.1556273043" required>
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
                    <button>Done</button>
                </div>
            </form>
        </div>
    <script src="script.js">
        function myFunction(){
  document.getElementById("dpc").classList.toggle("show");
}
function myFunction1(){
  document.getElementById("pop").classList.toggle("show");
}
    </script>
</body>
</html>