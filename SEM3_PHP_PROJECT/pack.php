<?php
#if(isset($_GET['id']))

require_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./img/1.png" type="image" rel="icon">
  <title>Sky Bright Tours and Travels</title>
  <link rel="stylesheet" href=".\css\packages.css" type="text/css">
  <link href=".\css\bootstrap.min.css" rel="stylesheet" />
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src="//code.tidio.co/5rn1pk05fo2juzd9tezaglzlitbqyc1u.js" async></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body method="GET">
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
        <li><a href="about.html"><i class="bi bi-info-square-fill"></i>About</a></li>
        <li>
          <a href="pack.php"><i class="bi bi-airplane-fill"></i>
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
  <div style="position:relative;">
    <img src="./img/1.png" height="500px" width="100%" style="opacity: 50%;" />
    <div style="top:35%; left:35%; position: absolute;">
      <h1 style="font-size:80px;">Home > Packages</h1>
    </div>
  </div>
  <!-- <div class="cover-wrap">
  <img src=".\img\backbutton.jpg" id="backBtn" class="img"> -->

  <div class="cover">
    <!--<div class="box">
        <img src=".\img\Andaman-redwood-trees-Cinque-Islands-Rutland-Island.jpg">
            <h2>Andaman-Nicobar Island</h2><br>
            <h4>6 days|3 Cities</h4>
            <h2>Destinations</h2>
            <p>PortBliar (3N) | Havelock (2N)</p>
            <p>Coming Soon</p>
            <button class="btn btn-primary">Book Now</button>
      </div>
    <div class="box">
        <img src=".\img\photo-1605649487212-47bdab064df7.jpg">
            <h2>Himachal Family Tour</h2><br>
            <h4>9 days|3 Cities</h4>
            <h4>Destinations:</h4>
            <p>Manali (3N) | Shimla (3N) | Dalhousie(3N)</p>
             <h4>SUPER DEAL PRICE</h4>
              <h2>₹ 18,900/- *</h2>
              <p>per person</p>
              <button class="btn btn-primary">Book Now</button>
      </div>
      <div class="box">
          <img src=".\img\637977422871552393.png">
              <h2>Kerala Highlights</h2><br>
              <h4>8 Days | 5 Cities</h4>
              <h4>Destinations:</h4>
              <p>Cochin (1N) | Munnar (2N) | Thekkady (1N) | Kottayam (1N) | Trivandrum (2N)</p>
               <h4>SUPER DEAL PRICE</h4>
                <h2>₹ 22,499/- *</h2>
                <p>per person</p>
                <button class="btn btn-primary">Book Now</button>
        </div>
        <div class="box">
          <img src=".\img\637968773131466091.jpg">
          <div>
              <h2>Special Kashmir</h2><br>
              <h4>9 Days | 3 Cities</h4>
              <h4>Destinations:</h4>
              <p>Katra (1N) | Srinagar Houseboat (1N) | Srinagar Hotel (3N) | Pahalgam (2N) | Katra (1N)</p>
               <h4>SUPER DEAL PRICE</h4>
                <h2>₹ 16,400/- *</h2>
                <p>per person</p>
                <button class="btn btn-primary">Book Now</button>
          </div>
        </div>
      <div class="box">
          <img src=".\img\lehladakh.jpg">
              <h2>Leh Ladakh Family Tour Summer 2023</h2><br>
              <h4>8 Days | 5 Cities</h4>
              <h4>Destinations:</h4>
              <p>Leh (2N) | Nubra (1N) | Pangong (1N) | Leh (2N)</p>
               <h4>SUPER DEAL PRICE</h4>
                <h2>₹ 20,900/- *</h2>
                <p>per person</p>
                <button class="btn btn-primary">Book Now</button>
        </div>
        <div id="Vaishnodevi Patnitop Shivkhodi" class="box">
            <img src=".\img\vaishnovidevi.jpg">
                <h2>Vaishnodevi Patnitop Shivkhodi</h2><br>
                <h4>5 Days | 1 Cities</h4>
                <h4>Destinations:</h4>
                <p>Katra (4N)</p>
                 <h4>SUPER DEAL PRICE</h4>
                  <h2>₹ 5,999/- *</h2>
                  <p>per person</p>
                  <button class="btn btn-primary">Book Now</button>
          </div>-->
    <?php
    #if(isset($_GET['id']))
    
    $qry = "SELECT * from packages";

    $records = mysqli_query($con, $qry);
    $row = mysqli_num_rows($records);
    while ($row = mysqli_fetch_array($records)) {
      ?>
      <div class="box">
        <img src="<?php echo $row['packimg'] ?>" />
        <h2>
          <?php echo $row['packname'] ?>
        </h2><br>
        <h4>
          <?php echo $row['packdays'] ?>
        </h4>
        <h4>Destinations:</h4>
        <p>
          <?php echo $row['packplaces'] ?>
        </p>
        <h4>SUPER DEAL PRICE</h4>
        <h2>₹
          <?php echo $row['packprice'] ?>/- *
        </h2>
        <p>per person</p>
        <!-- <button class="btn btn-secondary"><a href="<?php echo $row['packlink'] ?>" color="text-light" style="text-decoration: none;">View details</a></button> -->
        <form method="POST" action="tourinfo.php">
          <!-- <button type="submit" class="btn btn-warning" name="<?php echo $row['packname'] ?>"><a href="tourinfo.php"
              target="_blank" style="text-decoration: none;color:white;">View Details</a></button> -->
          <input type="submit" name="<?php echo $row['packname'] ?>" value="Visit">
        </form>
        <button class="btn btn-warning"><a href="login.php" target="_blank"
            style="text-decoration: none;color:white;">Book Now</a></button>

      </div>
      <?php
      //<?php $row['packagelink']
    }
    $con->close();
    ?>

  </div>
  <!-- <img src=".\img\nextbutton.jpg" id="nextBtn" class="img">
</div> -->

  <!--<section class="btn">
      <div>
      <button href="#Andaman-Nicobar">Andaman-Nicobar</button>
      <button href="#Himachal">Himachal</button>
      <button href="#Kashmir">Kashmir</button>
      <button href="#Kerala">Kerala</button>
      <button href="#Mahabaleshwar">Mahabaleshwar</button>
      <button href="#Madhya Pradesh">Madhya Pradesh</button>
      <button href="#Uttarakhand">Uttarakhand</button>
      <button href="#Leh-Ladakh">Leh-Ladakh</button>
      <button href="#Sikkim Darjeeling">Sikkim Darjeeling</button>
      <button href="#Vaisnodevi Patnitop Shivkhodi">Vaisnodevi Patnitop Shivkhodi</button>
    </div>
    </section>-->
  <footer>
    <div class="contact-us">
      <h2>Contact Us</h2>
      <p>Feel free to reach out to us with any questions or inquiries.</p>
      <ul>
        <li>Email: shahprapti585@gmail.com</li>
        <li>Phone: +91 8155920951</li>
        <!--<li>Address: 123 Main Street, City, Country</li>-->
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