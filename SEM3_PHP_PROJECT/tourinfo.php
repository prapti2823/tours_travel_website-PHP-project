<?php

require_once "config.php";

if (isset($_POST['Sikkim'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Sikkim'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Coorg'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Coorg'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Rajasthan'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Rajasthan'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Uttarakhand'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Uttarakhand'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Amritsar'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Amritsar'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['CharDham'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='CharDham'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Himachal'])) {
    // $packname = $_POST['Himachal'];
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Himachal'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['LehLadakh'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='LehLadakh'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Kerala'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Kerala'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Kashmir'])) {
    // $packname = $_POST['Himachal'];
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Kashmir'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Vaishnodevi'])) {
    // $packname = $_POST['Himachal'];
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Vaishnodevi'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Mahabaleshwar'])) {
    // $packname = $_POST['Himachal'];
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Mahabaleshwar'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Goa'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Goa'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['JogFalls'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='JogFalls'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['Hampi'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='Hampi'";
    $result = mysqli_query($con, $qry);
}

if (isset($_POST['MadhyaPradesh'])) {
    $qry = "SELECT * FROM `tourinfo` WHERE tourname='MadhyaPradesh'";
    $result = mysqli_query($con, $qry);
}

// if (isset($_POST['packname'])) {
//     $packname = $_POST['packname'];
//     $qry = "SELECT * FROM `tourinfo` WHERE tourname='$packname'";
//     $result = mysqli_query($con, $qry);
// }

// $result = mysqli_query($con, $qry);


// $row = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>

<head>
    <link href="./img/1.png" type="image" rel="icon">
    <title>Sky Bright Tours and Travels</title>
    <link href=".\css\tourinfo.css" type="text/css" rel="stylesheet">
    <!--<link href="bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="bootstrap.bundle.min.js" crossorigin="anonymous"></script>-->
    <link href=".\css\bootstrap.min.css" rel="stylesheet" />
    <script src=".\js\bootstrap.bundle.min.js"></script>
    <script src="//code.tidio.co/kptpfzpyeovlls5n4etsbbeaba6jonm4.js" async></script>
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

    <!-- <div>
        <div>
            
            
            
        </div>
      </div> -->
    <div class="main">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <img src="<?php echo $row['tourimg1'] ?>" class="d-block w-100" alt="..." width="50%"
                                height="600px">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $row['tourimg2'] ?>" class="d-block w-100" alt="..." width="50%"
                                height="600px">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $row['tourimg3'] ?>" class="d-block w-100" alt="..." width="50%"
                                height="600px">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div>
                    <h1>
                        <?php echo $row['tourname'] ?>
                    </h1>
                </div>
                <div style="line-height: 5px;">
                    <h2 style="text-align:justify; word-spacing: 2px; letter-spacing: 1px;">
                        <?php echo $row['tourinfo'] ?>
                    </h2>
                </div>
                <div style="padding-top:2px; padding-top:10px;">
                    <h3>
                        No of days:
                        <?php echo $row['tourdays'] ?>
                    </h3>
                </div>
                <div style="padding-top:5px;">
                    <h3 class="h3">
                        ₹
                        <?php echo $row['tourprice'] ?> /-
                        <h4>per person</h4>
                    </h3>
                </div>
                <div style="padding-top:5px;">
                    <button class="btn btn-warning"><a href="login.php" target="_blank"
                            style="text-decoration: none;color:white; font-size: 25px; padding:5px;">Book Now</a></button>
                </div>
            <?php } ?>
        </div>
    </div>

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