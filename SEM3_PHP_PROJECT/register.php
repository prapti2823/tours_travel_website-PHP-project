<?php
require_once "config.php";

if (isset($_POST['submit'])) {


  $fullname = $_POST['fullname'];
  $contact = $_POST['mno'];
  $email = $_POST['email'];
  $password = md5($_POST['pwd']);

  $qry = "INSERT INTO user(fullname,contact,email,password) VALUES('$fullname','$contact','$email','$password')";

  $result = mysqli_query($con, $qry);
}

if (isset($_POST['submit'])) {
  $fp = fopen("register.csv", "a");

  $no_rows = count(file("register.csv"));

  $fullname = $_POST['fullname'];
  $contact = $_POST['mno'];
  $email = $_POST['email'];

  $form_data = array(
    // 'sr_no'=> $no_rows,
    'Name' => $fullname,
    'Mobile' => $contact,
    'Email' => $email,
  );

  fputcsv($fp, $form_data);


}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=".\css\register2.css" type="text/css">
  <link href=".\css\bootstrap.min.css" rel="stylesheet" />
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src="//code.tidio.co/kptpfzpyeovlls5n4etsbbeaba6jonm4.js" async></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/css/style.css" />
  <link href="./img/1.png" type="image" rel="icon">
  <title>Sky Bright Tours and Travels</title>
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
  <div class="form-v2">
    <div class="page-content">
      <div class="form-v2-content">
        <div class="form-left">
          <img src="img/1.png" alt="form">
        </div>
        <form class="form-detail" action="#" method="post" id="myform">
          <h2>Registration Form</h2>
          <div class="form-row">
            <label for="full-name">Full Name:</label>
            <input type="text" name="fullname" id="full_name" class="input-text" placeholder="Enter Full name">
          </div>
          <div class="form-row">
            <label for="full-name">Mobile No:</label>
            <input type="text" name="mno" id="mno" class="input-text" required
              onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}">
          </div>
          <div class=" form-row">
            <label for="your_email">Email:</label>
            <input type="text" name="email" id="your_email" class="input-text" required
              pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          </div>
          <div class="form-row">
            <label for="password">Password:</label>
            <input type="password" name="pwd" id="password" class="input-text" required>
          </div>
          <div class="form-row">
            <label for="comfirm-password">Confirm Password:</label>
            <input type="password" name="cpwd" id="confirm_password" class="input-text" required>
          </div>
          <div class="form-row">
            <h2>Already have an account? <a href="login.php" style="text-decoration:none; font-size:30px;">Login</a>
            </h2>
          </div>
          <!-- <div class="form-checkbox">
            <label class="container">
              <p>By signing up, you agree to the <a href="#" class="text">Play Term of Service</a></p>
              <input type="checkbox" name="agree" id="agree">
              <span class="checkmark"></span>
            </label>
          </div> -->
          <div class="form-row-last">
            <input type="submit" name="submit" class="register" value="Register">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--<script>
    // just for the demos, avoids form submit
  //   jQuery.validator.setDefaults({
  //     debug: true,
  //     success: function (label) {
  //       label.attr('id', 'valid');
  //     },
  //   });
  //   $("#myform").validate({
  //     rules: {
  //       password: "required",
  //       confirm_password: {
  //         equalTo: "#password"
  //       }
  //     },
  //     messages: {
  //       full_name: {
  //         required: "Please provide an username"
  //       },
  //       your_email: {
  //         required: "Please provide an email"
  //       },
  //       password: {
  //         required: "Please provide a password"
  //       },
  //       confirm_password: {
  //         required: "Please provide a password",
  //         equalTo: "Wrong Password"
  //       }
  //     }
  //   });
  // </script>-->


  <!-- <section>
    <div class="form-box">
      <form method="post">
        <div>
          <h1>Sign Up Form</h1>
        </div>
        <div class="inputbox">
          <input type="text" name="fullname" required>
          <label>Full Name</label>
        </div>
        <div class="inputbox">
          <input type="text" name="mno" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10"
            pattern="([0-9]){10,}">
          <label>Mobile Number</label>
        </div>
        <div class="inputbox">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>
        <div class="inputbox">
          <input type="password" name="pwd" required minlength="8" maxlength="20"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}"
            title="password must cantain at least one number and one uppper case and one lowercase letter and minimum 8 characters and maximum 20 characters">
          <label>Password</label>
        </div>
        <div class="inputbox">
          <input type="password" name="cpwd" required>
          <label>Confirm Password</label>
        </div>
        <diV>
          <p>Already have an account? <a href="login.php">Login</a></p>
        </diV>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>

  </section> -->
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