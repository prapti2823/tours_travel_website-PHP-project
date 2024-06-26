<?php
// Check existence of id parameter before processing further
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT b.*, p.packname FROM bookings b JOIN packages p ON b.pack_id = p.packid WHERE b.id = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $name = $row["name"];
                $city = $row["city"];
                $mobile = $row["mobile"];
                $email = $row["email"];
                $adult = $row["adult"];
                $children = $row["children"];
                $packname = $row["packname"];
                $departuredate = $row["departuredate"];
                $paymentmethod = $row["paymentmethod"];
                $regDate = $row["regDate"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: bookingserror.php");
                exit();
            }

        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($con);
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: bookingserror.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href=".\css\bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>Name</label>
                        <p><b>
                                <?php echo $row["name"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <p><b>
                                <?php echo $row["city"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <p><b>
                                <?php echo $row["mobile"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p><b>
                                <?php echo $row["email"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label0> No of Adults</label>
                            <p><b>
                                    <?php echo $row["adult"]; ?>
                                </b></p>
                    </div>
                    <div class="form-group">
                        <label>No of Children</label>
                        <p><b>
                                <?php echo $row["children"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Package name</label>
                        <p><b>
                                <?php echo $row["packname"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Departure Date</label>
                        <p><b>
                                <?php echo $row["departuredate"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Payment Method</label>
                        <p><b>
                                <?php echo $row["paymentmethod"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Registration Date</label>
                        <p><b>
                                <?php echo $row["regDate"]; ?>
                            </b></p>
                    </div>
                    <p><a href="adminbookings.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>