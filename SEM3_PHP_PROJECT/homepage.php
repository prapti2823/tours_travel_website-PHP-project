<!DOCTYPE html>
<html>

<head>
  <link href="./img/1.png" type="image" rel="icon">
  <title>Sky Bright Tours and Travels</title>
  <link href="./css/home.css" type="text/css" rel="stylesheet">
  <link href=".\css\bootstrap.min.css" rel="stylesheet" />
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src="//code.tidio.co/kptpfzpyeovlls5n4etsbbeaba6jonm4.js" async></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <nav class="sticky-top">
    <div class="navbar-brand">
      <img src="./img/travel2.png" height="84px" width="84px" style="position: relative;" />
      <h6
        style="color:lightblue;top:0;position:absolute;padding-left:3em; padding-top: 1.0em;font-family:Arial, Helvetica, sans-serif;font-weight: bold; font-size: 20px;">
        <i>Sky
          Bright</i><br><i> Travels</i>
      </h6>
    </div>
    <div class="menu">
      <ul>
        <li style="padding-left:100px;"><a href="homepage.php"><i class="bi bi-house"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-info-square-fill"></i>About</a></li>
        <li>
          <a href="#package"><i class="bi bi-airplane-fill"></i>
            Packages
          </a>
        </li>
        <li><a href="gallery.html"><i class="bi bi-image-fill"></i>Gallery</a></li>
        <li><a href="contactus.php"><i class="bi bi-person-lines-fill"></i>Contact</a></li>
        <li><a href="./adminlogin.php" target="_blank"><i class="bi bi-file-person"></i>Admin</a></li>
        <li style="float: right;"><a href="login.php"><i class="bi bi-person-circle"></i>Login</a></li>
        <li style="float: right;"><a href="register.php"><i class="bi bi-pencil-square"></i>Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <div>
    <img src="./img/1.png" height="1000px" width="100%" />
    <!-- <div style="top:35%; left:42%; position: absolute;">
      <h1 style="font-size:80px;">Home</h1>
    </div> -->
  </div>

  <div>
    <h1>WHY CHOOSE US?</h1>
  </div>
  <div class="container">

    <div class="section">
      <div><i class="icon bi bi-airplane"></i></div>
      <h3>
        Multifarious Destinations
      </h3>
      <p>Looking for your next tour ? We are here to help you with the Multifarious Destinations.</p>
    </div>

    <div class="section">
      <div><i class="icon bi bi-currency-dollar"></i></div>
      <h3>
        Value for Money
      </h3>
      <p>We are providing special packages for all over India with very min cost.</p>
    </div>

    <div class="section">
      <div><i class="icon bi bi-check-circle"></i></div>
      <h3>
        Beautiful Places
      </h3>
      <p>Our mission to provide you to feel Incredible Tour experience.</p>
    </div>

    <div class="section">
      <div><i class="icon bi bi-headset"></i></div>
      <h3>
        Passionate Travel
      </h3>
      <p>We show the best in travel options for travellers who are desperate to select items off from their bucket list.
      </p>
    </div>
  </div>

  <section id="about">
    <div>
      <img src="./img/travel3.png" height="500px" width="100%" style="opacity:0.4;" />
      <!-- <div style="top:35%; left:42%; position: absolute;">
      <h1 style="font-size:80px;">Home</h1>
    </div> -->
    </div>
    <div style="top:185%; left:1%; position: absolute;">
      <div>
        <video src=" .\video\trip.mp4" alt="video" height="500px" width="500px" controls autoplay loop
          style="padding-bottom: 20px;float:left;"></video>
      </div>
    </div>
    <div style="max-width: 1600px; top:190%; left:35%; position: absolute; color:brown;">
      <div style=" text-indent: 100px;text-align: justify;padding-right:20px;">
        <h1>About Us</h1>
        <h3>We, at <b>SkyBright Tours and Travels</b>, are experts in the field of travel and tourism industry in India,
          committed to providing best in class service for delivering holidays both pleasant and enjoyable.

          We promise to treat you as our very own family members. We believe in transparency and hence
          we never go wrong in over promising or under delivering.

          We are a trustworthy tour operator company for more than two decades now. Your blessings and
          satisfaction is our ultimate profit that matters more than what we earn. We welcome you to
          join us and have the most wonderful time of your life.
        </h3>
      </div>
      <div>
        <button style="border-radius: 30px; background-color: orange;text-align:center;justify-content: center;"><a
            href="about.html">Read
            More</a></button>
      </div>
    </div>
  </section>

  <section id="package">
    <div>
      <h1>Top Indian Destinations</h1>
    </div>

    <div class="contain">

      <div class="album py-5 bg-body-tertiary">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container">
                <div class="zoom-image-wrapper">
                  <img src="./img/Sikkim.jpg" width="100%" height="300" class="zoom-image" />
                  <div class="overlay">
                    <h2 style="text-align: center;">
                      Sikkim
                    </h2>
                    <form method="POST" action="tourinfo.php">
                      <input type="submit" name="Sikkim" value="Visit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container">
                <div class="zoom-image-wrapper">
                  <img src="./img/coorgmysoreooty.jpg" width="100%" height="300" class="zoom-image" />
                  <div class="overlay">
                    <h2 style="text-align: center;">
                      Coorg
                    </h2>
                    <form method="POST" action="tourinfo.php">
                      <input type="submit" name="Coorg" value="Visit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container">
                <div class="zoom-image-wrapper">
                  <img src="./img/rajasthan.jpg" width="100%" height="300" class="zoom-image" />
                  <div class="overlay">
                    <h2 style="text-align: center;">
                      Rajasthan
                    </h2>
                    <form method="POST" action="tourinfo.php">
                      <input type="submit" name="Rajasthan" value="Visit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container">
                <div class="zoom-image-wrapper">
                  <img src="./img/Uttarakhand (1).jpg" width="100%" height="300" class="zoom-image" />
                  <div class="overlay">
                    <h2 style="text-align: center;">
                      Uttarakhand
                    </h2>
                    <form method="POST" action="tourinfo.php">
                      <input type="submit" name="Uttarakhand" value="Visit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container">
                <div class="zoom-image-wrapper">
                  <img src="./img/Uttar-Pradesh.jpg" width="100%" height="300" class="zoom-image" />
                  <div class="overlay">
                    <h2 style="text-align: center;">
                      Madhya Pradesh
                    </h2>
                    <form method="POST" action="tourinfo.php">
                      <input type="submit" name="MadhyaPradesh" value="Visit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container">
                <div class="zoom-image-wrapper">
                  <img src="./img/chardham2.jpg" width="100%" height="300" class="zoom-image" />
                  <div class="overlay">
                    <h2 style="text-align: center;">
                      Char Dham
                    </h2>
                    <form method="POST" action="tourinfo.php">
                      <input type="submit" name="CharDham" value="Visit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <?php
          // require_once "config.php";
          
          // $qry = "SELECT * FROM homepage";
          
          // $result = mysqli_query($con, $qry);
          // $row = mysqli_num_rows($result);
          // while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container">
                <div class="zoom-image-wrapper">
                  <a href="tourinfo.php" style="text-decoration:none;">
                  <img src="<?php echo $row['tourimg'] ?>" width="100%" height="300" class="zoom-image" />
                  <div class="overlay">
                    <h2 style="text-align: center;">
                      <form method="POST" action="tourinfo.php">
                        <input type="submit" name="<?php echo $row['tourname'] ?>"
                          value="<?php echo $row['tourname'] ?>" />
                      </form>
                    </h2>
                  </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php
          // }
          ?> -->
        </div>
      </div>
    </div>
    <div class="button">
      <button class="bg bg-primary"><a href="pack.php" style="text-decoration:none; color: white;">Explore
          More</a></button>
    </div>
  </section>

  <div>
    <h1>Weekend Gateways</h1>
  </div>

  <div class="contain">

    <div class="album py-5 bg-body-tertiary">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <div class="zoom-image-wrapper">
                <img src="./img/goa1.jpg" width="100%" height="300" class="zoom-image" />
                <div class="overlay">
                  <h2 style="text-align: center;">
                    Goa
                  </h2>
                  <form method="POST" action="tourinfo.php">
                    <input type="submit" name="Goa" value="Visit">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <div class="zoom-image-wrapper">
                <img src="./img/jogfalls1.jpg" width="100%" height="300" class="zoom-image" />
                <div class="overlay">
                  <h2 style="text-align: center;">
                    Jog Falls
                  </h2>
                  <form method="POST" action="tourinfo.php">
                    <input type="submit" name="JogFalls" value="Visit">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <div class="zoom-image-wrapper">
                <img src="./img/hampi1.jpg" width="100%" height="300" class="zoom-image" />
                <div class="overlay">
                  <h2 style="text-align: center;">
                    Hampi
                  </h2>
                  <form method="POST" action="tourinfo.php">
                    <input type="submit" name="Hampi" value="Visit">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div>
    <h2>Testimonials</h2>
    <h1>What people say about us</h1>
  </div>
  <section class="testimonial-section">
    <div class="testimonial-card">
      <p class="testimonial-content">
        We 5 family members went to Kerala recently. We all had a nice experience.
        The food provided to us were excellent and the hotel rooms allotted to us
        were quite comfortable. Even both the tour managers were cooperative and
        very caring. Bus driver and other staff members were very courteous and helpful.
        All in all it was an enjoyable and memorable trip for us. Thanks to the management of Sky Bright Tours and
        Travels.</p>
      <h3 class="testimonial-author">Atul Parikh</h3>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-content">very very nice experience. i have visited many countries through this travel
        agency.
        all the time they provide best food and service.</p>
      <h3 class="testimonial-author">Dhruv Panchal</h3>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-content">
        Our himachal trip was amazing, it was great experience ,our overall experience with Sky Bright Tours and
        Travels was excellent and special thanks to Shilpaben for your
        prompt reply and you have excellent communication skills. Thank you for creating our best memories of
        himachal
        trip.</p>
      <h3 class="testimonial-author">Hiren Patel</h3>
    </div>
    <?php
    require_once "config.php";

    $qry = "SELECT name,message FROM contact";

    $result = mysqli_query($con, $qry);
    $row = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="testimonial-card">
        <p class="testimonial-content">
          <?php echo $row['message'] ?>
        </p>
        <h3 class="testimonial-author">
          <?php echo $row['name'] ?>
        </h3>
      </div>
      <?php
    }
    ?>

  </section>

  <!-- <section>
    <div style="text-align: center;padding-top: 20px;">
      <h3>
        Top Selling
      </h3>
      <h2 style="font-size: 40px;">Quick Links</h2>
    </div>
    </div>
    <div>
      <p style="text-align: center;">
        <a href="tourinfo.php">Himachal</a>|
        <a href="kashmir.html">Kashmir</a>|
        <a href="kerala.html">Kerala</a>|
        <a href="leh-ladakh.html">Leh-Ladakh</a>|
        <a href="sikkim.html">Sikkim Darjeeling</a>|
        <a href="uttarakhand.html">Uttarakhand</a>|
        <a href="vaishnodevi.html">Vaishnodevi</a>
      </p>
    </div>
  </section> -->


  <footer>
    <div class="contact-us">
      <h2>Contact Us</h2>
      <p>Feel free to reach out to us with any questions or inquiries.</p>
      <ul>
        <li>Email: shahprapti585@gmail.com</li>
        <li>Phone: +91 8155920951</li>
        <li>Address: 123 Main Street, City, Country</li>
      </ul>
      <div>
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-linkedin"></i>
        <i class="bi bi-whatsapp"></i>
        <i class="bi bi-instagram"></i>
      </div>
    </div>

  </footer>

</body>

</html>