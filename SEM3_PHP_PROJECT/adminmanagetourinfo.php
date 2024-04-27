<?php

require_once "config.php";

if (isset($_POST['submit'])) {
    $target_dir = "./img/";
    $tourimg1 = $target_dir . basename($_FILES['tourimg1']['name']);
    $tourimg2 = $target_dir . basename($_FILES['tourimg2']['name']);
    $tourimg3 = $target_dir . basename($_FILES['tourimg3']['name']);
    $tourname = $_POST['tourname'];
    $tourinfo = $_POST['tourinfo'];
    $tourdays = $_POST['tourdays'];
    $tourprice = $_POST['tourprice'];

    $qry = "INSERT INTO tourinfo(tourimg1,tourimg2,tourimg3,tourname,tourinfo,tourdays,tourprice) VALUES('$tourimg1','$tourimg2','$tourimg3','$tourname','$tourinfo','$tourdays','$tourprice')";

    $result = mysqli_query($con, $qry);

}

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
    <style>
        .pagination {
            display: inline-block;
            margin: 10px;
        }

        .pagination a {
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        .row {
            margin-top: 20px;
        }

        .col-sm-8 {
            width: 100%;
        }
    </style>
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
                    <li class="nav-item"><a class="nav-link" href="./packages.php"><span class="nav-icon"></span>
                            Create</a></li>
                    <li class="nav-item"><a class="nav-link" href="./manage.php"><span class="nav-icon"></span>
                            Manage</a></li>
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
            <!-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> Icons</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Notifications</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="widgets.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
            </svg> Widgets</a></li> -->
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
                    <!-- <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 500</a></li> -->
                </ul>
            </li>
            <!--<li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/"
          target="_blank">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
          </svg> Docs</a></li>
      <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
          </svg> Try CoreUI
          <div class="fw-semibold">PRO</div>
        </a></li>-->
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
                <!-- <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul> -->
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>

                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
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
                        <li class="breadcrumb-item active"><span>Manage Tour Details</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3" style="background-color:white;">
            <div class="container-lg">
                <div class="row">
                    <h2 style="text-align: center;">Tour Details</h2>
                    <!--<a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>-->
                    <div class="pagination">
                        <?php
                        require_once "config.php";

                        $results_per_page = 5;

                        // $qry = "SELECT * FROM bookings";  
                        // $result = mysqli_query($con, $qry);       
                        
                        $sql = "SELECT * FROM tourinfo";

                        $result = mysqli_query($con, $sql);
                        $number_of_result = mysqli_num_rows($result);

                        //determine the total number of pages available  
                        $number_of_page = ceil($number_of_result / $results_per_page);


                        if ($result = mysqli_query($con, $sql)) {
                            if (mysqli_num_rows($result) > 0) { ?>
                                <table border="1" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Image</th>
                                            <th>Second Image</th>
                                            <th>Third Image</th>
                                            <th>Tour Name</th>
                                            <th>Tour Details</th>
                                            <th>Tour days</th>
                                            <th>Tour Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        if (!isset($_GET['page'])) {
                                            $page = 1;
                                        } else {
                                            $page = $_GET['page'];
                                        }

                                        //determine the sql LIMIT starting number for the results on the displaying page  
                                        $page_first_result = ($page - 1) * $results_per_page;

                                        //retrieve the selected results from database   
                                        $sql = "SELECT *FROM tourinfo LIMIT " . $page_first_result . ',' . $results_per_page;
                                        $result = mysqli_query($con, $sql);


                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['tourid'] . "</td>";
                                            ?>
                                            <td><img src="<?php echo $row['tourimg1'] ?>" height='100px' width='100px'></td>
                                            <td><img src="<?php echo $row['tourimg2'] ?>" height='100px' width='100px'></td>
                                            <td><img src="<?php echo $row['tourimg3'] ?>" height='100px' width='100px'></td>
                                            <?php echo "<td>" . $row['tourname'] . "</td>";
                                            echo "<td>" . $row['tourinfo'] . "</td>";
                                            echo "<td>" . $row['tourdays'] . "</td>";
                                            echo "<td>" . $row['tourprice'] . "</td>";
                                            echo "<td>";
                                            echo '<a style="padding:5px;" href="viewtour.php?tourid=' . $row['tourid'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a style="padding:5px;" href="updatetour.php?tourid=' . $row['tourid'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a style="padding:5px;" href="tourdelete.php?tourid=' . $row['tourid'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                            echo "</td>";
                                            echo "</tr>";
                                        } ?>
                                    </tbody>
                                </table>
                                <?php

                                for ($page = 1; $page <= $number_of_page; $page++) {
                                    echo '<a href = "adminmanagetourinfo.php?page=' . $page . '" style="text-decoration:none;">' . $page . ' </a>';
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                            }
                        } else {
                            echo "Oops! Something went wrong. Please try again later.";
                        }

                        // Close connection
                        mysqli_close($con);
                        ?>
                    </div>
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