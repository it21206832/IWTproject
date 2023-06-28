<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>HIKKA TRAVELS</title>
        <link rel="stylesheet" href="../css/Booking.css">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet"  href="BoatSafariHeader1.css">
    </head>
    <body bgcolor="#34495e">
        <!-- Header Section -->
    <header>
        <!-- Menu Bar -->
        <div id="menu-bar" class="fas fa-bars"></div>
  
        <!-- Logo Image -->
        <!-- <img src="../images/Logo.png" alt="logo" height="70px" /> -->
  
        <!-- Company Logo -->
        <a href="../html/BoatSafariHeader.php" class="logo"><span>H</span>IKKA <span>T</span>RAVELS </a>
  
        <!-- Navigation Bar -->
        <nav class="navbar">
        <a href="../html/BoatSafariHeader.php">Home</a>
        <a href="../html/BoatSafariHeader.php">About</a>
        <a href="../html/BoatSafariHeader.php">Services</a>
        <a href="../html/BoatSafariHeader.php">Gallery</a>
        <a href="../html/BoatSafariHeader.php">Packages</a>
        <a href="../html/BoatSafariContactUs.php">Contact</a>
        <a href="../html/BoatSafariBookUs.php">BookUs</a>
        <a href="register.php">SignUp</a>
        </nav>
  
        <!-- Icons -->
        <div class="icons">
          <i class="fas fa-search" id="search-btn" title="Search"></i>
          <a href="#"><i class="fas fa-user" id="login-btn" title="Login"></i></a>
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
  
       <br><br> <br>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

	<br><br>
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
            <li><a href="../html/BoatSafariHeader.php">Home</a></li>
            <li><a href="../html/BoatSafariHeader.php">About</a></li>
            <li><a href="../html/BoatSafariHeader.php">Services</a></li>
            <li><a href="../html/BoatSafariHeader.php">Gallery</a></li>
            <li><a href="../html/BoatSafariHeader.php">Packages</a></li>
            <li><a href="../html/BoatSafariContactUs.php">Contact</a></li>
            <li><a href="../html/BoatSafariBookUs.php">BookUs</a></li>
            <li><a href="register.php">SignUp</a></li>
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
</body>
</html>