<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HIKKA TRAVELS</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- External Stylesheet Link -->
    <link rel="stylesheet" href="../css/BoatSafariBookUs1.css" />
    <script src="../js/BoatSafariLogin1.js"></script>
  </head>
  <body>
    <!-- Header Section -->
    <header>
      <!-- Menu Bar -->
      <div id="menu-bar" class="fas fa-bars"></div>

      <!-- Logo Image -->
      <!-- Company Logo -->
      <a href="#" class="logo"><span>H</span>IKKA <span>T</span>RAVELS </a>

      <!-- Navigation Bar -->
      <nav class="navbar">
        <a href="BoatSafariHeader.php">Home</a>
        <a href="BoatSafariHeader.php">About</a>
        <a href="BoatSafariHeader.php">Services</a>
        <a href="BoatSafariHeader.php">Gallery</a>
        <a href="BoatSafariHeader.php">Packages</a>
        <a href="#contact">Contact</a>
        <a href="#">BookUs</a>
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
        <a href="BoatSafariHeader.php" class="feedback-logo">
          <span>H</span>IKKA ⛵ <span>T</span>RAVELS
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
        <input type="submit" name="sub"  value="send">
      </form>
    </div>

    <!-- Booking Section -->
    <div class="container1">
            <center>
            <div class="header">
            </div>

            <form action="../php/booking.php" method="POST" class="form" id="form">

                <img src="../images/Logo2.png" alt="">

                <h1 class="heading">
                    <span>B</span>
                    <span>O</span>
                    <span>O</span>
                    <span>K</span>
                    <span>I</span>
                    <span>N</span>
                    <span>G</span>
                    <span class="space"></span>
                    <span>F</span>
                    <span>O</span>
                    <span>R</span>
                    <span>M</span>
                  </h1>

                <div class="salutation">
                <div class="form-control ">
                    <label>Salutation  </label>
                    <input type="radio" name="Salutation">Mr.
                    <input type="radio" name="Salutation">Miss./Mrs./Ms.            
                </div>
                <div class="form-control">
                    <label>First Name  </label>
                    <input type="text" placeholder="Smith" id="firstname" required>
                    <small>Error</small>
                </div>
                    
                <div class="form-control">
                    <label>Last Name  </label>
                    <input type="text" placeholder="Walker" id="lastname" required>
                    <small>Error</small>
                </div>

                <div class="form-control">
                    <label>Phone No  </label>
                    <input type="tel" placeholder="012-3456789" id="number" required>
                    <small>Error</small>
                </div>

                <div class="form-control">
                    <label>E-Mail  </label>
                    <input type="email" placeholder="example@gmail.com" id="email" required autocapitalize="off">
                    <small>Error</small>
                </div>

                <div class="form-control">
                    <label>Country  </label>
                    <input type="text" placeholder="Sri-Lanka" id="country" required>
                </div>
            </div>
                <div class="form-control">
                    <lable>What Type Of A Service Do You Need</lable>
                    <input type="text" placeholder="Service Type" id="type" required>
                </div>


                <h3>How Many People In Your Group<br><br></h3>
            <div class="numberofpeople">
                <div class="form-control">
                    <label>No Of Adults  </label>
                    <input type="number" placeholder="00" id="adults" required>
                </div>

                <div class="form-control">
                    <label>No Of Children  </label>
                    <input type="number" placeholder="00" id="children" required>
                </div>
            </div>

                <div class="form-control">
                    <label>What Is Your Budget Per Night Per Person For Accommodation With Breakfast : </label>
                    <input type="text" placeholder="00.00" id="budget" required>
                </div>

                <div class="form-control">
                    <label>When Would You Like To Go : </label>
                    <div class="whentogo">
                    <input type="radio" name="When Would You Like To Go" required>I Know The Exact Date<br>
                    <input type="radio" name="When Would You Like To Go" required>I Have A Rough Idea<br>
                    <input type="radio" name="When Would You Like To Go" required>I'm Not Sure
                    </div>
                </div>

                <input type="submit" name="sub-btn" class="sub-btn" value="Submit">
            </center>    
            </form>      
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
            <li><a href="BoatSafariContactUs.php">Contact</a></li>
            <li><a href="#">BookUs</a></li>
            <li><a href="../php/register.php">SignUp</a></li>
          </ul>
        </div>
        <!-- Contact Us Details -->
        <div class="section contact">
          <h3>Contact Us</h3>
          <ul class="info">
            <li>
              <span><i class="fa-solid fa-location-dot"></i></span
              ><span>
                <p>
                  No 759, Galle Road,<br />
                  Thiranagama,<br />
                  Hikkaduwa.
                </p>
              </span>
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
