<?php
require_once "config.php";

if (isset($_POST['submit'])) {


  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $qry = "INSERT INTO contact(name,mobile,email,message) VALUES('$name','$mobile','$email','$message')";

  $result = mysqli_query($con, $qry);
}

if (isset($_POST['submit'])) {
  $fp = fopen("contact.csv", "a");

  $no_rows = count(file("contact.csv"));

  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $form_data = array(
    // 'sr_no'=> $no_rows,
    'Name' => $name,
    'Mobile' => $mobile,
    'Email' => $email,
    'Message' => $message
  );

  fputcsv($fp, $form_data);


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./img/1.png" type="image" rel="icon">
  <title>Sky Bright Tours and Travels</title>
  <!-- <link href=".\css\index.css" type="text/css" rel="stylesheet"> -->
  <link href=".\css\bootstrap.min.css" rel="stylesheet" />
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src="//code.tidio.co/5rn1pk05fo2juzd9tezaglzlitbqyc1u.js" async></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <style>
    nav {
      background-color: black;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 10px;
    }

    nav ul li {
      display: inline-block;
      font-size: 20px;
      position: relative;
    }

    nav ul li a {
      display: block;
      padding: 10px 20px;
      color: white;
      text-decoration: none;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    .navbar-brand {
      float: left;
    }


    /*menu*/
    /*.....*/


    /*footerlist-style: none;*/
    footer {
      background-color: black;
      color: white;
      padding: 20px;
      margin-top: auto;
    }

    .contact-us {
      text-align: center;
    }

    .contact-us h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .contact-us p {
      margin-bottom: 10px;
    }

    .contact-us ul {
      list-style-type: none;
      padding: 0;
    }

    .contact-us li {
      margin-bottom: 5px;
    }

    .social-media a {
      color: #fff;
      margin-right: 10px;
      font-size: 20px;
      text-decoration: none;
    }

    .social-media a:hover {
      color: #aaa;
    }

    .contact-form {
      max-width: 400px;
      margin: 0 auto;
    }

    .contact-form label {
      display: block;
      margin-bottom: 10px;
    }

    .contact-form input[type="text"],
    .contact-form input[type="tel"],
    .contact-form input[type="email"],
    .contact-form textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 20px;
    }

    .contact-form input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
    }

    .contact-form input[type="submit"]:hover {
      background-color: #45a049;
    }

    div i {
      font-size: 20px;
      padding: 10px;
    }

    div i:hover {
      cursor: pointer;
    }
  </style>
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
  <div style="position:relative;">
    <img src="./img/1.png" height="500px" width="100%" style="opacity: 50%;" />
    <div style="top:35%; left:35%; position: absolute;">
      <h1 style="font-size:80px;">Home > Feedback</h1>
    </div>
  </div>
  <section id="contact" class="contact">
    <div data-aos="fade-up">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.29919168184!2d72.4149280352566!3d23.020158082373918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1687435450155!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </section>
  <h1 style="text-align: center;">Feedback</h1>

  <form class="contact-form" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="mobile">Mobile Number:</label>
    <input type="tel" id="mobile" name="mobile" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10"
      pattern="([0-9]){10,}">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea>

    <input type="submit" value="Submit" name="submit"><br><br>
  </form>
  <<footer>
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