<?php

require_once "config.php";

?>

<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
--><!-- Breadcrumb-->
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link href="./img/1.png" type="image" rel="icon">
  <title>Sky Bright Tours and Travels</title>
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Vendors styles-->
  <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="css/vendors/simplebar.css">
  <!-- Main styles for this application-->
  <link href="./css/style.css" rel="stylesheet">
  <!-- We use those styles to show code examples, you should remove them in your application.-->
  <link href="./css/examples.css" rel="stylesheet">
  <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>

<body>
  <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <img src="./img/1.png" height="170px" width="170px" />
      <!-- <h4>Sky Bright Tours and Travels</h4> -->
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link" href="index.php">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
          </svg> Dashboard</a></li>
      <!--<li class="nav-item"><a class="nav-link" href="./adminhomepage.php">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
          </svg> Home page</a>
      </li>-->
      <li class="nav-item"><a class="nav-link" href="./user.php">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
          </svg> User</a>
      </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
          </svg> Packages</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="./packages.php"><span class="nav-icon"></span> Create</a></li>
          <li class="nav-item"><a class="nav-link" href="./manage.php"><span class="nav-icon"></span> Manage</a></li>
        </ul>
      </li>
      <li class="nav-item"><a class="nav-link" href="./adminbookings.php">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
          </svg> Bookings</a></li>
      <li class="nav-item"><a class="nav-link" href="./contact.php">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
          </svg> Feedback</a>
      </li>
      <li class="nav-divider"></li>
      <li class="nav-title">Extras</li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
          </svg> Pages</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="admintourinfo.php">Add Tour detail</a></li>
          <li class="nav-item"><a class="nav-link" href="adminmanagetourinfo.php">Manage Tour Detail
            </a></li>
          <!--<li class="nav-item"><a class="nav-link" href="adminabout.php">About Page</a></li>-->
        </ul>
      </li>
      <!-- <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/"
          target="_blank">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
          </svg> Docs</a></li>
      <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
          </svg> Try CoreUI
          <div class="fw-semibold">PRO</div>
        </a></li> -->
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
      <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
          onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
          <svg class="icon icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
          </svg>
        </button><a class="header-brand d-md-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg></a>
        <ul class="header-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="adminbookings.php">
              <svg class="icon icon-lg">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
              </svg>
            </a>
          </li>

        </ul>
        <ul class="header-nav ms-3">
          <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
              aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-md"><img class="avatar-img" src="./img/admin.jpg"
                  alt="praptishah2823@gmail.com">
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
              <div class="dropdown-header bg-light py-2">

                <div class="fw-semibold">Settings</div>
              </div><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg> Profile</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="adminlogin.php">
                <svg class="icon me-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Logout</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="header-divider"></div>
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
              <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>Dashboard</span></li>
          </ol>
        </nav>
      </div>
    </header>
    <div class="body flex-grow-1 px-3">
      <div class="container-lg">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-black bg-white">
              <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <div style="height:220px;">
                  <?php

                  $qry = "SELECT COUNT(*) as count FROM user";

                  $result = $con->query($qry);

                  $row = $result->fetch_assoc();
                  $count = $row['count'];
                  ?>
                  <div class="fs-4 fw-semibold">Total number of user registered</div>
                  <div>
                    <h4 style="font-size:50px; text-align:center;">
                      <?php echo $count; ?>
                    </h4>
                  </div>
                  <hr>
                  <a href="user.php" style="text-decoration:none; color:black; font-size:20px;">View Details</a>
                </div>
                <!-- <div class="dropdown">
                  <button class="btn btn-transparent text-black p-0" type="button" data-coreui-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                    </svg>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                      class="dropdown-item" href="#`">Another action</a><a class="dropdown-item" href="#">Something else
                      here</a></div>
                </div> -->
              </div>

            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-black bg-white">
              <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <div style="height:220px;">
                  <?php

                  $qry = "SELECT COUNT(*) as count FROM packages";

                  $result = $con->query($qry);

                  $row = $result->fetch_assoc();
                  $count = $row['count'];
                  ?>
                  <div class="fs-4 fw-semibold">Total number of packages</div>
                  <div>
                    <h4 style="font-size:50px; text-align:center;">
                      <?php echo $count; ?>
                    </h4>
                  </div>
                  <hr>
                  <a href="manage.php" style="text-decoration:none; color:black; font-size:20px;">View Details</a>
                </div>
                <!-- <div class="dropdown">
                  <button class="btn btn-transparent text-black p-0" type="button" data-coreui-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                    </svg>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                      class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else
                      here</a></div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-black bg-white">
              <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <div style="height:220px;">
                  <?php

                  $qry = "SELECT COUNT(*) as count FROM bookings";

                  $result = $con->query($qry);

                  $row = $result->fetch_assoc();
                  $count = $row['count'];
                  ?>
                  <div class="fs-4 fw-semibold">Total number of bookings done</div>
                  <div>
                    <h4 style="font-size:50px; text-align:center;">
                      <?php echo $count; ?>
                    </h4>
                  </div>
                  <hr>
                  <a href="adminbookings.php" style="text-decoration:none; color:black; font-size:20px;">View
                    Details</a>
                </div>
                <!-- <div class="dropdown">
                    <button class="btn btn-transparent text-black p-0" type="button" data-coreui-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                        class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something
                        else
                        here</a></div>
                  </div> -->
              </div>
            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-black bg-white">
              <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <di style="height:220px;">
                  <?php

                  $qry = "SELECT COUNT(*) as count FROM contact";

                  $result = $con->query($qry);

                  $row = $result->fetch_assoc();
                  $count = $row['count'];
                  ?>
                  <div class="fs-4 fw-semibold">Total number of feedbacks given</div>
                  <div>
                    <h4 style="font-size:50px; text-align:center;">
                      <?php echo $count; ?>
                    </h4>
                  </div>
                  <hr>
                  <a href="contact.php" style="text-decoration:none; color:black; font-size:20px;">View Details</a>
              </div>
              <!-- <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                        class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something
                        else
                        here</a></div>
                  </div> -->
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </div>
  </div>
  <footer class="footer">

    <div class="ms-auto"><a href="index.php">Sky Bright Tours and Travels</a></div>
  </footer>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="vendors/simplebar/js/simplebar.min.js"></script>
  <!-- Plugins and scripts required by this view-->
  <script src="vendors/chart.js/js/chart.min.js"></script>
  <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
  <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
  <script src="js/main.js"></script>
  <script>
  </script>

</body>

</html>