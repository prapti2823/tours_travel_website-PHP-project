<?php
session_start();

require_once "config.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['pwd']);

  $qry = "SELECT * from user where email='$email' AND password='$password'";

  $result = mysqli_query($con, $qry);

  if ($row = mysqli_num_rows($result) > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
      // echo "Correct";
      $_SESSION['user_name'] = $email;
      header("Location: book.php");
      exit();
    } else {
      echo "<script>alert('Incorrect email or password')</script>";
    }
  }
}
?>

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <!-- <link rel="stylesheet" type="text/css" href="./css/util.css"> -->
  <link rel="stylesheet" type="text/css" href="./css/main.css">

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
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST">
          <span class="login100-form-title p-b-43">
            Login to continue
          </span>


          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" required title="Valid email is required: ex@abc.xyz">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>


          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="pwd" required title="Password is required">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <!-- <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label> -->
          <!-- <a href="#" class="txt1">
                Forgot Password?
              </a>
            </div>

            <div>

            </div>
          </div> -->


          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="submit">
              Login
            </button>
          </div>

          <div class="text-center p-t-46 p-b-20">
            <h3>
              Don't have an account? <a href="register.php" style="text-decoration:none; font-size:30px;">Register</a>
            </h3>
          </div>

          <!-- <div class="login100-form-social flex-c-m">
            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
              <i class="fa fa-facebook-f" aria-hidden="true"></i>
            </a>

            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div> -->
        </form>

        <div class="login100-more" style="background-image: url('./img/1.png'); min-height: 100vh;">
        </div>
      </div>
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
  <!-- </section> -->
</body>

</html>