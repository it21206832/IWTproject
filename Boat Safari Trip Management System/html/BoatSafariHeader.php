<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta name="viewport" content="width=1200px, maximum-scale=1.0 " /> -->
    <title>HIKKA TRAVELS</title>

    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />

    <!-- External Stylesheet Link -->
    <link rel="stylesheet" href="../css/BoatSafariHeader1.css" />
    <link rel="stylesheet" href="../css/BoatSafariHeader2.css" />
    <link rel="stylesheet" href="../css/BoatSafariPackages1.css" />
    <link rel="stylesheet" href="../css/lightbox.css">
    <!-- <link rel="stylesheet" href="../css/Gcss.css"> -->
  </head>

  <body>
    <!-- Header Section -->
    <header>
      <!-- Menu Bar -->
      <div id="menu-bar" class="fas fa-bars"></div>

      <!-- Logo Image -->
      <!-- <img src="../images/Logo.png" alt="logo" height="70px" /> -->

      <!-- Company Logo -->
      <a href="#" class="logo"><span>H</span>IKKA <span>T</span>RAVELS </a>

      <!-- Navigation Bar -->
      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#gallery">Gallery</a>
        <a href="#packages">Packages</a>
        <a href="BoatSafariContactUs.php">Contact</a>
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

      <form method="post" action="">
        <a href="#" class="feedback-logo"
          ><span>H</span>IKKA ⛵ <span>T</span>RAVELS
        </a>
        <h2>Give Your Feedback</h2>
        <div class="id">
          <input type="text" placeholder="Username" name="username" required autocapitalize="off"/>
          <i class="fa-solid fa-circle-user"></i>
        </div>
        <div class="id">
          <input type="email" placeholder="Email Address" name="email" required autocapitalize="off"/>
          <i class="fas fa-envelope"></i><br />
        </div>
        <div class="feedback">
          <textarea
            name="feedback"
            id="feedback"
            cols="15"
            rows="5"
            placeholder="Drop Us a Feedback...."
            required
          ></textarea>
        </div >
        <input type="submit" name="sub"  value="SEND" class="sub-btn">
      </form>
    </div>

    <?php    
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "feedback";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['sub']))
  {
    $username= $_POST["username"];
	  $email= $_POST["email"];
	  $feedback= $_POST["feedback"];

    $sql="INSERT INTO feedback(F_ID,Username,Email,Feedback) VALUES('','$username','$email','$feedback')";

    if ($conn->query($sql) === TRUE) {
    echo " ";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
?>


    <!-- Home Section -->
    <section class="home" id="home">
      <div class="content">
        <h3>Adventure is Worthwhile</h3>
        <p>Discover New Places with us, adventure awaits</p>
        <a href="#about" class="btn">discover more</a>
      </div>
    </section>
    <center>
      <div class="controls">
        <span class="vid-btn active" data-src="../videos/Hikkaduwa1.mp4"></span>
        <span class="vid-btn" data-src="../videos/Hikkaduwa2.mp4"></span>
        <span class="vid-btn" data-src="../videos/Hikkaduwa3.mp4"></span>
      </div>
    </center>

    <div class="video-container">
      <video
        src="../videos/Hikkaduwa1.mp4"
        id="video-slider"
        loop
        autoplay
        muted
      ></video>
    </div>

    <!-- About Section -->
    <section class="about" id="about"></section>

    <h1 class="heading">
      <span>a</span>
      <span>b</span>
      <span>o</span>
      <span>u</span>
      <span>t</span>
      <span class="space"></span>
      <span>u</span>
      <span>s</span>
    </h1>

    <h3 class="heading2">
      <span>w</span>
      <span>h</span>
      <span>o</span>
      <span class="space"></span>
      <span>a</span>
      <span>r</span>
      <span>e</span>
      <span class="space"></span>
      <span>w</span>
      <span>e</span>
      <span>?</span>
    </h3>
    <div class="img">
      <div class="logo-img">
        <img src="../images/Logo.png" alt="Logo" class="logo-img" />
      </div>
      <div class="description">
        <p>
          Hikka Travels Boat Safari established in 2020 as a company who provide
          boat safaris around Hikkaduwa area, we offer accommodation and
          conducting day outing activities to local and foreign travelers. We
          are well established and well known organization in the industry with
          more than two years of experience.
        </p>
      </div>
    </div>

    <h3 class="heading2">
      <span>w</span>
      <span>h</span>
      <span>a</span>
      <span>t</span>
      <span class="space"></span>
      <span>w</span>
      <span>e</span>
      <span class="space"></span>
      <span>d</span>
      <span>o</span>
      <span>?</span>
    </h3>

    <div class="content-description">
      <div class="box">
        <div class="inner">
          <div class="icon"><i class="fa-solid fa-sailboat"></i></div>
          <h3>Tours</h3>
          <p>
            Hikka Travels Boat Safari established in 2020 as a company who
            provide boat safaris around Hikkaduwa area. <br />
            <br />
          </p>
        </div>
      </div>
      <div class="box">
        <div class="inner">
          <div class="icon"><i class="fa-solid fa-house"></i></div>
          <h3>Accommodation</h3>
          <p>
            We are inviting the people who want to feel the freedom of the
            nature, spend a evening at our fine residences.
          </p>
        </div>
      </div>
      <div class="box">
        <div class="inner">
          <div class="icon"><i class="fa-solid fa-utensils"></i></div>
          <h3>Meals</h3>
          <p>
            We are now providing nutritous meals as your request.We have a
            diversed menu to choose your favourites <br /><br />
          </p>
        </div>
      </div>
    </div>

    <!--Services Section-->
    <section class="services" id="services"></section>

    <h1 class="heading">
      <span>S</span>
      <span>e</span>
      <span>r</span>
      <span>v</span>
      <span>i</span>
      <span>c</span>
      <span>e</span>
      <span>s</span>
    </h1>

    <h3 class="heading2">
      <span>O</span>
      <span>u</span>
      <span>r</span>
      <span class="space"></span>
      <span>S</span>
      <span>p</span>
      <span>e</span>
      <span>c</span>
      <span>i</span>
      <span>a</span>
      <span>l</span>
      <span>i</span>
      <span>Z</span>
      <span>a</span>
      <span>t</span>
      <span>i</span>
      <span>o</span>
      <span>n</span>
      <span>s</span>
    </h3>

 <div class="card-holder">

  <div class="card">

    <img src="../images/BD.jfif" alt="pic" class="card-img">

    <div class="card-contents">
      <h3 class="card-name">Glass Bottom Boat <center>Rides</center></h3>

      <p class="para">
         Hikkaduwa is most famous for coral reefs.So many local and foriegn tourists visit this place to explore those amazing Coral reefs.
         
        <span class="card-read-more">Therefore Glass Bottom Boat Rides are something essential for those who visit here. 
          Not only that but also tourists can book their rides for a reasonable price.
            According to the seasons they can get a discount for those packages which is provided by us. </span>
      </p>

      <p class="read-more-btn">Read More</p>

    </div>


  </div>

  <div class="card">

    <img src="../images/surf.jpg" alt="pic" class="card-img">

    <div class="card-contents">
      <h3 class="card-name">Surfing Lessons</h3>

      <p class="para">
        Surfing is the most bissful experience you can have in this world.It is a taste of heaven.So this is a great chance for those who have no idea about surfing but willing to learn how to surf correctly.

        <span class="card-read-more">We offer many plans to learn surfing with an experienced coach.According to the package type, time and other details will be displayed.</span>
      </p>

      <p class="read-more-btn">Read More</p>

    </div>


  </div>

  <div class="card">

    <img src="../images/div.jfif" alt="pic" class="card-img">

    <div class="card-contents">
      <h3 class="card-name">Diving</h3>

      <p class="para">
        Diving is another adventures experience that you can have by visiting here.If you are an untrained person, you can have one of our members with you. There is no extra charge for having a member of us for diving.
        <span class="card-read-more">Diving kit and other equipments will be provided by our members out there.You can explore many fabulous coral reafs . And also you can see a lot of ornamental fish around the shallow sea and coral reefs.</span>
      </p>

      <p class="read-more-btn">Read More</p>

    </div>

  </div>

  <div class="card">

      <img src="../images/Nl.jfif" alt="pic" class="card-img">

      <div class="card-contents">
        <h3 class="card-name">Beach Parties</h3>

        <p class="para">
          Beach parties are another speacial thing for the travellers.After travelling this is a good opportunity to relax.The decorations , foods and DJ s are provided by us. 

          <span class="card-read-more">Anniversaries, B'day parties and othe occasions are also handled by us. You only just have to mention the package type with speacific services in the booking section.</span>
        </p>

        <p class="read-more-btn">Read More</p>

      </div>

    </div>

    <div class="card">

      <img src="../images/c9.jpg" alt="pic" class="card-img">

      <div class="card-contents">
        <h3 class="card-name">Accommodation</h3>

        <p class="para">
          We are so glad to say that, now we are offering accommodations for you, as you asked for past several years.
          It is very beautiful villa with 5 rooms with attached bathrooms, pool etc.

          <span class="card-read-more">You can book the rooms also in the booking section by providing your details. Hope you can spend unforgettable days there.</span>
        </p>

        <p class="read-more-btn">Read More</p>

      </div>

    </div>

    <div class="card">

      <img src="../images/c20.jpg" alt="pic" class="card-img">

      <div class="card-contents">
        <h3 class="card-name">Meals</h3>

        <p class="para">
          Now you can have new recipies because we offer new dishes from many countries. 
          Addional food items can be ordered after visiting to the villa. 

          <span class="card-read-more">You can have free beverages according to the package type.Enjoy your meals.   </span>
        </p>

        <p class="read-more-btn">Read More</p>

      </div>

    </div>

</div>

    <!-- Gallery Section -->

    <section class="gallery" id="gallery"></section>

    <h1 class="heading">
      <span>G</span>
      <span>A</span>
      <span>L</span>
      <span>L</span>
      <span>E</span>
      <span>R</span>
      <span>Y</span>

    </h1>
    <h3 class="heading2">
      <span>E</span>
      <span>x</span>
      <span>P</span>
      <span>L</span>
      <span>O</span>
      <span>R</span>
      <span>E</span>
      <span class="space"></span>
      <span>D</span>
      <span>R</span>
      <span>E</span>
      <span>A</span>
      <span>M</span>
      <span class="space"></span>
      <span>D</span>
      <span>I</span>
      <span>S</span>
      <span>C</span>
      <span>O</span>
      <span>V</span>
      <span>E</span>
      <span>R</span>
    </h3>
    
    <div class = "gallery-container">
       <ul class="filter-menu">
           <li data-target="all">All</li>
           <li data-target="beach">Hikkaduwa Beach</li>
           <li data-target="river">Maadu River</li>
           <li data-target="marine-life">Marine Life</li>
           <li data-target="coral-reefs">Coral Reafs</li>
           <li data-target="accommodation">Accommodation</li>
       </ul>
       
       <ul class="filter-item">

       <li data-item="beach"><a href="../images/photo 6.jpg" data-lightbox="models">
            <img src="../images/photo 6.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 20.jpg" data-lightbox="models">
            <img src="../images/photo 20.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 22.jpg" data-lightbox="models">
            <img src="../images/photo 22.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 23.jpg" data-lightbox="models">
            <img src="../images/photo 23.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 11.jpg" data-lightbox="models">
            <img src="../images/photo 11.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/new.jfif" data-lightbox="models">
            <img src="../images/new.jfif" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 14.jpg" data-lightbox="models">
            <img src="../images/photo 14.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 15.jpg" data-lightbox="models">
            <img src="../images/photo 15.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 17.jpg" data-lightbox="models">
            <img src="../images/beach 17.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 18.jpg" data-lightbox="models">
            <img src="../images/beach 18.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 19.jpg" data-lightbox="models">
            <img src="../images/beach 19.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 20.jpg" data-lightbox="models">
            <img src="../images/beach 20.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 21.jpg" data-lightbox="models">
            <img src="../images/beach 21.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 27.jpg" data-lightbox="models">
            <img src="../images/beach 27.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 28.jpg" data-lightbox="models">
            <img src="../images/beach 28.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 29.jpg" data-lightbox="models">
            <img src="../images/beach 29.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 30.jpg" data-lightbox="models">
            <img src="../images/beach 30.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 31.jpg" data-lightbox="models">
            <img src="../images/beach 31.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 32.jpg" data-lightbox="models">
            <img src="../images/beach 32.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 33.jpg" data-lightbox="models">
            <img src="../images/beach 33.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 34.jpg" data-lightbox="models">
            <img src="../images/beach 34.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 36.jpg" data-lightbox="models">
            <img src="../images/beach 36.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 37.jpg" data-lightbox="models">
            <img src="../images/beach 37.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 38.jpg" data-lightbox="models">
            <img src="../images/beach 38.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 39.jpg" data-lightbox="models">
            <img src="../images/beach 39.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 40.jpg" data-lightbox="models">
            <img src="../images/beach 40.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 41.jpg" data-lightbox="models">
            <img src="../images/beach 41.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 43.jpg" data-lightbox="models">
            <img src="../images/beach 43.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 49.jpg" data-lightbox="models">
            <img src="../images/beach 49.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 56.jpg" data-lightbox="models">
            <img src="../images/beach 56.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 61.jpg" data-lightbox="models">
            <img src="../images/beach 61.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 66.jpg" data-lightbox="models">
            <img src="../images/beach 66.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 67.jpg" data-lightbox="models">
            <img src="../images/beach 67.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 79.jpg" data-lightbox="models">
            <img src="../images/beach 79.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 80.jpg" data-lightbox="models">
            <img src="../images/beach 80.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/beach 81.jpg" data-lightbox="models">
            <img src="../images/beach 81.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 25.jpg" data-lightbox="models">
            <img src="../images/photo 25.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 27.jpg" data-lightbox="models">
            <img src="../images/photo 27.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 28.jpg" data-lightbox="models">
            <img src="../images/photo 28.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 31.jpg" data-lightbox="models">
            <img src="../images/photo 31.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 34.jpg" data-lightbox="models">
            <img src="../images/photo 34.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 38.jpg" data-lightbox="models">
            <img src="../images/photo 38.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 39.jpg" data-lightbox="models">
            <img src="../images/photo 39.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 40.jpg" data-lightbox="models">
            <img src="../images/photo 40.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 42.jpg" data-lightbox="models">
            <img src="../images/photo 42.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 44.jpg" data-lightbox="models">
            <img src="../images/photo 44.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 46.jpg" data-lightbox="models">
            <img src="../images/photo 46.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 48.jpg" data-lightbox="models">
            <img src="../images/photo 48.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 50.jfif" data-lightbox="models">
            <img src="../images/photo 50.jfif" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 51.jfif" data-lightbox="models">
            <img src="../images/photo 51.jfif" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 61.jpg" data-lightbox="models">
            <img src="../images/photo 61.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 62.jpg" data-lightbox="models">
            <img src="../images/photo 62.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 64.jpg" data-lightbox="models">
            <img src="../images/photo 64.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 65.jpg" data-lightbox="models">
            <img src="../images/photo 65.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 66.jpg" data-lightbox="models">
            <img src="../images/photo 66.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 67.jpg" data-lightbox="models">
            <img src="../images/photo 67.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 68.jpg" data-lightbox="models">
            <img src="../images/photo 68.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 69.jpg" data-lightbox="models">
            <img src="../images/photo 69.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 70.jpg" data-lightbox="models">
            <img src="../images/photo 70.jpg" alt=""></a></li>
        <li data-item="beach"><a href="../images/photo 71.jpg" data-lightbox="models">
            <img src="../images/photo 71.jpg" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 1.jfif" data-lightbox="models">
            <img src="../images/CR 1.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 5.jfif" data-lightbox="models">
            <img src="../images/CR 5.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 6.jfif" data-lightbox="models">
            <img src="../images/CR 6.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 7.jfif" data-lightbox="models">
            <img src="../images/CR 7.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 8.jfif" data-lightbox="models">
            <img src="../images/CR 8.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 9.jfif" data-lightbox="models">
            <img src="../images/CR 9.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 10.jpg" data-lightbox="models">
            <img src="../images/CR 10.jpg" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 11.jfif" data-lightbox="models">
            <img src="../images/CR 11.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 13.jfif" data-lightbox="models">
            <img src="../images/CR 13.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 15.jfif" data-lightbox="models">
            <img src="../images/CR 15.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 16.jfif" data-lightbox="models">
            <img src="../images/CR 16.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 20.jfif" data-lightbox="models">
            <img src="../images/CR 20.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 21.jfif" data-lightbox="models">
            <img src="../images/CR 21.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 25.jfif" data-lightbox="models">
            <img src="../images/CR 25.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 27.jfif" data-lightbox="models">
            <img src="../images/CR 27.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 28.jfif" data-lightbox="models">
            <img src="../images/CR 28.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 30.jfif" data-lightbox="models">
            <img src="../images/CR 30.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 33.jfif" data-lightbox="models">
            <img src="../images/CR 33.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 36.jfif" data-lightbox="models">
            <img src="../images/CR 36.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 46.jfif" data-lightbox="models">
            <img src="../images/CR 46.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 48.jfif" data-lightbox="models">
            <img src="../images/CR 48.jfif" alt=""></a></li>
        <li data-item="coral-reefs"><a href="../images/CR 49.jfif" data-lightbox="models">
            <img src="../images/CR 49.jfif" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 59.jfif" data-lightbox="models">
            <img src="../images/ML 59.jfif" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 60.jpg" data-lightbox="models">
            <img src="../images/ML 60.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 52.jfif" data-lightbox="models">
            <img src="../images/ML 52.jfif" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 56.jpg" data-lightbox="models">
            <img src="../images/ML 56.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 1.jpg" data-lightbox="models">
            <img src="../images/ML 1.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 4.jpg" data-lightbox="models">
            <img src="../images/ML 4.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 5.jpg" data-lightbox="models">
            <img src="../images/ML 5.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 6.jpg" data-lightbox="models">
            <img src="../images/ML 6.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 7.jpg" data-lightbox="models">
            <img src="../images/ML 7.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 8.jpg" data-lightbox="models">
            <img src="../images/ML 8.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 11.jpg" data-lightbox="models">
            <img src="../images/ML 11.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 12.jpg" data-lightbox="models">
            <img src="../images/ML 12.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 13.jpg" data-lightbox="models">
            <img src="../images/ML 13.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 16.jpg" data-lightbox="models">
            <img src="../images/ML 16.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 18.jpg" data-lightbox="models">
            <img src="../images/ML 18.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 45.jpg" data-lightbox="models">
            <img src="../images/ML 45.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 23.jpg" data-lightbox="models">
            <img src="../images/ML 23.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 30.jpg" data-lightbox="models">
            <img src="../images/ML 30.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 32.jpg" data-lightbox="models">
            <img src="../images/ML 32.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 34.jpg" data-lightbox="models">
            <img src="../images/ML 34.jpg" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 47.jfif" data-lightbox="models">
            <img src="../images/ML 47.jfif" alt=""></a></li>
        <li data-item="marine-life"><a href="../images/ML 48.jpg" data-lightbox="models">
            <img src="../images/ML 48.jpg" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 2.jfif" data-lightbox="models">
            <img src="../images/MR 2.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 3.jfif" data-lightbox="models">
            <img src="../images/MR 3.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 11.jfif" data-lightbox="models">
            <img src="../images/MR 11.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 20.jfif" data-lightbox="models">
            <img src="../images/MR 20.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 18.jfif" data-lightbox="models">
            <img src="../images/MR 18.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 9.jfif" data-lightbox="models">
            <img src="../images/MR 9.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 8.jfif" data-lightbox="models">
            <img src="../images/MR 8.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 10.jfif" data-lightbox="models">
            <img src="../images/MR 10.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 17.jfif" data-lightbox="models">
            <img src="../images/MR 17.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 7.jfif" data-lightbox="models">
            <img src="../images/MR 7.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 19.jfif" data-lightbox="models">
            <img src="../images/MR 19.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 4.jfif" data-lightbox="models">
            <img src="../images/MR 4.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 12.jfif" data-lightbox="models">
            <img src="../images/MR 12.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 16.jfif" data-lightbox="models">
            <img src="../images/MR 16.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 15.jfif" data-lightbox="models">
            <img src="../images/MR 15.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 13.jfif" data-lightbox="models">
            <img src="../images/MR 13.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 5.jfif" data-lightbox="models">
            <img src="../images/MR 5.jfif" alt=""></a></li>
        <li data-item="river"><a href="../images/MR 6.jfif" data-lightbox="models">
            <img src="../images/MR 6.jfif" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c1.jpg" data-lightbox="models">
            <img src="../images/c1.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c2.jpg" data-lightbox="models">
            <img src="../images/c2.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c3.jpg" data-lightbox="models">
            <img src="../images/c3.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c4.jpg" data-lightbox="models">
            <img src="../images/c4.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c8.jpg" data-lightbox="models">
            <img src="../images/c8.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c9.jpg" data-lightbox="models">
            <img src="../images/c9.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c12.jpg" data-lightbox="models">
            <img src="../images/c12.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c16.jpg" data-lightbox="models">
            <img src="../images/c16.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c11.jpg" data-lightbox="models">
            <img src="../images/c11.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c6.jpg" data-lightbox="models">
            <img src="../images/c6.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c5.jpg" data-lightbox="models">
            <img src="../images/c5.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c7.jpg" data-lightbox="models">
            <img src="../images/c7.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c10.jpg" data-lightbox="models">
            <img src="../images/c10.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c18.jfif" data-lightbox="models">
            <img src="../images/c18.jfif" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c21.jpg" data-lightbox="models">
            <img src="../images/c21.jpg" alt=""></a></li>
        <li data-item="accommodation"><a href="../images/c20.jpg" data-lightbox="models">
            <img src="../images/c20.jpg" alt=""></a></li>
       
            </ul>
 
 </div>

 <!-- packages section -->

<section class="packages" id="packages">

<h1 class="heading">
    <span>p</span>
    <span>a</span>
    <span>c</span>
    <span>k</span>
    <span>a</span>
    <span>g</span>
    <span>e</span>
    <span>s</span>
</h1>
<br><br>
<div class="box-container">

    <div class="box">
        <img src="../images/photo 2.jpg" alt="">
        <div class="content">
            <h3> Diamond Package </h3>
            <p><li>All services are available.</li>
              <li>You can book the whole resort for 2 nights.</li>
              <li>Maximum members : 15</li> 
            </p>
           <br>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price"> RS 30000.00  </div>
            <a href="BoatSafariBookUs.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/c11.jpg" alt="">
        <div class="content">
            <h3> Platinum Package</h3>
          <p> <li>You can book the whole resort for 1 night.</li>
              <li>Maximum members : 10</li>
              <li>Only surfing lessons are unavailable.</li></p> 
              <br>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price"> RS 25000.00</div>
            <a href="BoatSafariBookUs.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/photo 4.jpg" alt="">
        <div class="content">
            <h3> Golden Package</h3>
            <p><li>Surfing Lessons.</li>
              <li>Diving.</li>
              <li>Meals are available for 12 hours.</li>
            <li>Can book rooms for 8 hours.</li></p>
            <br>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price"> RS 20000.00 </div>
            <a href="BoatSafariBookUs.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box" id="b4">
        <img src="../images/photo 8.jpg" alt="">
        <div class="content">
            <h3> Silver Package</h3>
            <p>
              <li>Diving.</li>
              <li>Glass Bottom Boat Rides.</li>
              <li>Surfing Lessons.</li>
              </p>
              <br>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price"> RS 15000.00</div>
            <a href="BoatSafariBookUs.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box" id="b5">
        <img src="../images/p2.jpg" alt="">
        <div class="content">
            <h3>Bronze Package </h3>
            <p><li>Glass Bottom Boat Rides.</li>
            <li>Diving kits will be provided.</li></p>
            <br>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price"> RS 10000.00 </div>
            <a href="BoatSafariBookUs.php" class="btn">book now</a>
        </div>
    </div>

</div>

</section>

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
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#packages">Packages</a></li>
            <li><a href="#contact">Contact</a></li>
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
    <script src="../js/BoatSafariHeader2.js"></script>
    <script src="../js/BoatSafariHeader1.js"></script>
    <script src="../js/BoatSafariHeader3.js"></script>
  </body>
</html>
