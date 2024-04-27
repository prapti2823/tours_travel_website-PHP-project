<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\css\about.css" type="text/css">
    <link href=".\css\bootstrap.min.css" rel="stylesheet" />
    <script src=".\js\bootstrap.bundle.min.js"></script>
    <script src="//code.tidio.co/kptpfzpyeovlls5n4etsbbeaba6jonm4.js" async></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="./img/1.png" type="image" rel="icon">
    <title>Sky Bright Tours and Travels</title>
</head>

<body>
    <nav class="sticky-top">
        <!--<div class="navbar-brand">
            <a href="#">Logo</a>
          </div>-->
        <!-- <div class="navbar-search">
            <ul>
              
            </ul>
          </div>   -->
        <div class="menu">
            <ul>
                <li><a href="homepage.php"><i class="bi bi-house"></i>Home</a></li>
                <li><a href="about.html"><i class="bi bi-info-square-fill"></i>About</a></li>
                <li>
                    <a href="pack.php"><i class="bi bi-airplane-fill"></i>
                        Packages
                    </a>
                    <!--class="nav-item dropdown"
                 data-bs-toggle="dropdown" aria-expanded="false"<ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="andaman-nicobar.html">Andaman-Nicobar</a></li>
                <li><a class="dropdown-item" href="himachal.html">Himachal</a></li>
                <li><a class="dropdown-item" href="kerala.html">Kerala</a></li><br>
                <li><a class="dropdown-item" href="kashmir.html">Kashmir</a></li>
                <li><a class="dropdown-item" href="leh-ladakh.html">Leh-Ladakh</a></li>
                <li><a class="dropdown-item" href="vaishnodevi.html">Vaishnodevi</a></li>
              </ul>-->
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
        <img src="./img/1.png" height="700px" width="100%" style="opacity: 70%;" />
        <div style="top:35%; left:35%; position: absolute;">
            <h1 style="font-size:80px;">Home > About</h1>
        </div>
    </div>
    <section>
        <div>
            <h1>About Us</h1>
            <?php

            require_once "config.php";

            $qry = "SELECT * FROM about";

            $result = mysqli_query($con, $qry);

            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <h3>
                    <?php

                    echo $row['aboutus'];

            }

            ?>
                <!-- We, at <b>SkyBright Tours and Travels</b>, are experts in the field of travel and tourism industry in
India,
committed to providing best in class service for delivering holidays both pleasant and enjoyable.

We promise to treat you as our very own family members. We believe in transparency and hence
we never go wrong in over promising or under delivering.

We are a trustworthy tour operator company for more than two decades now. Your blessings and
satisfaction is our ultimate profit that matters more than what we earn. We welcome you to
join us and have the most wonderful time of your life. -->
            </h3>
            <h3>
                Living your life to the fullest and also helping you to experience it, is the ultimate motto of us.
                Because we thinks, that dreams are to be lived and those who misses that chance, loses their soul
                forever.

                It is our dream, not only to discover the unknown on our own, but also let the people discover the
                unknown along
                with us.
                ”There is no right age, when it comes to dreams,hardworking”. The living example of this well known
                saying is us
                only.
                He took an initiative, to to put up his first step towards the stairs which will surely help to achieve
                the
                heights of success.

            </h3>
            <h3>
                With the support of our friends, families and well wishers, we started our own business in tours and
                travels
                since year 2018.
                Since then, we has always tried our level to let our customers be fully satisfied with our skills and
                knowledge.

                This business which we runs, has a goal to provide the best services to our customers, to provide and
                ease to
                them in their traveling journey.
                This service provider company, has made many people’s journey, the most memorable one with qualities of
                it’s
                own.

                It is a low-profile service provider company. We believes that it is not the money which last, but the
                memories,
                which leaves it’s stain in everyone’s life forever and ever and ever…
            </h3>
        </div>
    </section>
    <video src=".\video\trip.mp4" alt="video" height="800px" width="100%" controls autoplay loop
        style="padding-bottom: 20px;"></video>
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
</body>

</html>