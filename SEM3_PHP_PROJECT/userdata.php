<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./img/1.png" type="image" rel="icon">
    <title>Sky Bright Tours and Travels</title>
    <link rel="stylesheet" type="text/css" href=".\css\login2.css" />
    <link href=".\css\bootstrap.min.css" rel="stylesheet" />
    <script src=".\js\bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href=".\css\index.css"/> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" type="text/css" href="./css/util.css"> -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">

</head>

<body>
    <nav class="sticky-top">
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

    <div class="limiter">
        <!-- <div>
            <div> -->
        <form method="POST">
            <table border="1" class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Adult</th>
                        <th>Children</th>
                        <th>Destination</th>
                        <th>Departuredate</th>
                        <th>Payment Method</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php

                        require_once "config.php";

                        session_start();

                        if (isset($_POST['submit'])) {
                            $email = $_POST[$_SESSION['user_name']];
                            $qry = "SELECT b.name,b.city,b.mobile,b.email,b.adult,b.children,p.packname,b.departuredate,b.paymentmethod,b.regDate from bookings b JOIN packages p ON b.pack_id = p.packid where b.email = $email";

                            $result = mysqli_query($con, $qry);

                            while ($row = mysqli_fetch_array($result)) {

                                ?>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['city'] ?>
                                </td>
                                <td>
                                    <?php echo $row['mobile'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['adult'] ?>
                                </td>
                                <td>
                                    <?php echo $row['children'] ?>
                                </td>
                                <td>
                                    <?php echo $row['packname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['departuredate'] ?>
                                </td>
                                <td>
                                    <?php echo $row['paymentmethod'] ?>
                                </td>
                                <td>
                                    <?php echo $row['regDate'] ?>
                                </td>
                                <?php

                            }

                        } ?>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- </div>
        </div> -->
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
    <!-- </section> -->
</body>

</html>