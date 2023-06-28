<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HIKKA TRAVELS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <!-- External Stylesheet Link -->
    <link rel="stylesheet" href="../css/BoatSafariContactUs1.css" />
    <link rel="stylesheet" href="../css/BoatSafariContactUs2.css">
  </head>
  <body>
    <!-- Header Section -->
    <header>
      <!-- Menu Bar -->
      <div id="menu-bar" class="fas fa-bars"></div>

      <!-- Logo Image -->

      <!-- Company Logo -->
      <a href="BoatSafariHeader.php" class="logo"><span>H</span>IKKA  <span>T</span>RAVELS </a>

      <!-- Navigation Bar -->
      <nav class="navbar">
        <a href="BoatSafariHeader.php">Home</a>
        <a href="BoatSafariHeader.php">About</a>
        <a href="BoatSafariHeader.php">Services</a>
        <a href="BoatSafariHeader.php">Gallery</a>
        <a href="BoatSafariHeader.php">Packages</a>
        <a href="#">Contact</a>
        <a href="BoatSafariBookUs.php">BookUs</a>
        <a href="../php/register.php">SignUp</a>
      </nav>

      <!-- Icons -->
      <div class="icons">
        <i class="fas fa-search" id="search-btn" title="Search"></i>
        <a href="../php/login.php"><i class="fas fa-user" id="login-btn" title="Login"></i></a> 
        <i class="fa-solid fa-comment" id="feedback-btn" title="Feedback"></i>
      </div>

      <!-- Search Bar -->
      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Search Here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>

    <!-- Feedback Form Container -->
    <div class="feedback-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="">
        <a href="#" class="feedback-logo"
          ><span>H</span>IKKA ⛵ <span>T</span>RAVELS
        </a>
        <h2>Give Your Feedback</h2>
        <div class="id">
          <input type="text" placeholder="Username" />
          <i class="fa-solid fa-circle-user"></i>
        </div>
        <div class="id">
          <input type="email" placeholder="Email Address" />
          <i class="fas fa-envelope"></i><br />
        </div>
        <div class="feedback">
          <textarea
            name="feedback"
            id="feedback"
            cols="15"
            rows="5"
            placeholder="Drop Us a Feedback...."
          ></textarea>
        </div>
        <button>Send</button>
      </form>
    </div>

    <!-- Contact Section -->
      <p style="padding:0px 0px 5% 0px ">  </p>
      <hr>
      <div >
      <h1 class="heading">
          <span>C</span>
          <span>O</span>
          <span>N</span>
          <span>T</span>
          <span>A</span>
          <span>C</span>
          <span>T</span>
          <span class="space"></span>
          <span>U</span>
          <span>S</span>
      </h1>
      </div>
      <div class="tx">
        <p>Have an inquiry or some feedback for us?</p> 
        <p>Fill Out the form bellow to contact our team and we will get to you within 24 hours.</p>
      </div>
      <div class="leftside">
        <form method="POST" action="">
            <label for="fname">Your Name</label><br>
            <input type="text" id="fname" name="fname" required><br><br>
            <label for="email">Mail</label><br>
            <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z09.-]+\.[a-z]{2,3}"title="Must contain at characters,uppercases and lowercase letters." required><br><br>
            <label for="subject">Subject</label><br>
            <input type="text" id="subject" name="subject"required><br><br>
            <label for="msg">Message</label><br>
            <textarea name="msg" rows="8" cols="50" style="background-color:white" required></textarea><br><br>
            <input type="submit" name="submit" value="Submit" id="submitBtn" class="sub-btn">
            
        </form>

        <?php    
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "contact";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['submit']))
  {
    $username= $_POST["fname"];
	  $email= $_POST["email"];
    $subject = $_POST["subject"];
	  $Message = $_POST["msg"];

    $sql="INSERT INTO contact(M_ID,Name,Email,Subject,Message) VALUES('','$username','$email','$subject','$Message')";

    if ($conn->query($sql) === TRUE) {
    echo "";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
?>

        
      </div>
      <div id="msg">
          <h3>Telephone number must contain the following</h3>
          <p id="number" class="invalid">A<b>number</b></p>
          <p id=" length" class=" invalid">Minimum and maximum<b>10 numbers</b></p>

          <h3>Email must contain the following</h3>
          <p id="letter" class="invalid">Input<b>letters</b></p>
          <p id="character" class="invalid">Input<b>characters</b></p>
      </div>

      <br><br><br><br><br><br><br><br>
      <div class="rightside">
        <div >
            <ul class="contactDetails">
                <li><i class="fa-solid fa-phone"></i></li>
                <li>
                    +94 719154661 , +94 778729586
                </li>
            </ul>
            <ul class="contactDetails">
                <li><i class="fa-solid fa-envelopes-bulk"></i></li>
                <li>Wearehikkatravels@Gmail.Com</li>
            </ul>
            <ul class="contactDetails">
                <li><i class="fa-solid fa-map-location-dot"></i></li>
                <li> No 759, Galle Road,<br>
                     Thiranagama,<br>
                     Hikkaduwa.
                </li>
            </ul>            
        </div>
        <div >
            <ul class="icon">
                <li><a href="#"><i class="fa-brands fa-facebook" style="font-size: 4em"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter-square" style="font-size: 4em"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram-square" style="font-size: 4em"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google-plus" style="font-size: 4em"></i></a></li>
            </ul>
        </div>
    </div>
    <p style="padding:0px 0px 30% 0px "> </p>
    <div class="video-container">
      <video
        src="../videos/Hikkaduwa1.mp4"
        id="video-slider"
        loop
        autoplay
        muted
      ></video>
    </div>
    <!-- Footer Section -->
    <footer>
      <div class="container">
        <div class="section about">
          <h3>About Us</h3>
          <p>
            Hikka Travels established in 2020 as a company who provides boat
            safaris around Hikkaduwa area for local and foreign travelers. We
            are a well established and well known organization in industry with
            more than 2 years experience.
          </p>

          <!-- Social Media Links -->
          <ul class="social-media">
            <li>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-airbnb"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="section links">
          <!-- Quick Links -->
          <h3>Quick Links</h3>
          <ul>
            <li><a href="BoatSafariHeader.php">Home</a></li>
            <li><a href="BoatSafariHeader.php">About</a></li>
            <li><a href="BoatSafariHeader.php">Services</a></li>
            <li><a href="BoatSafariHeader.php">Gallery</a></li>
            <li><a href="BoatSafariHeader.php">Packages</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="BoatSafariBookUs.php">BookUs</a></li>
            <li><a href="../php/register.php">SignUp</a></li>
          </ul>
        </div>
        <!-- Contact Us Details -->
        <div class="section contact">
          <h3>Contact Us</h3>
          <ul class="info">
            <li>
              <span><i class="fa-solid fa-location-dot"></i></span
              ><span
                ><p>
                  No 759, Galle Road,<br />
                  Thiranagama,<br />
                  Hikkaduwa.
                </p></span
              >
            </li>
            <li>
              <span><i class="fa-solid fa-phone"></i></span
              ><span>
                <p>+94 719154661</p>
                <p>+94 778729586</p>
              </span>
            </li>
            <li>
              <span><i class="fa-solid fa-envelope"></i></span
              ><span> <p>wearehikkatravels@gmail.com</p></span>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- Copyright Claim -->
    <div class="copyright-text">
      <p>Copyright © 2022 Hikka Travels. All Rights Reserved</p>
    </div>

    <!-- Javascript Link -->
    <script src="../js/BoatSafariHeader1.js"></script>
  </body>
</html>
