<?php
// Check existence of id parameter before processing further
if (isset($_GET["tourid"]) && !empty(trim($_GET["tourid"]))) {
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM tourinfo WHERE tourid = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["tourid"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $tourimg1 = $row['tourimg1'];
                $tourimg2 = $row['tourimg2'];
                $tourimg3 = $row['tourimg3'];
                $tourname = $row["tourname"];
                $tourinfo = $row['tourinfo'];
                $tourdays = $row["tourdays"];
                $tourprice = $row["tourprice"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                // header("location: tourageerror.php");
                // exit();
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
    header("location: tourerror.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href=".\assets\css\bootstrap.min.css">
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
                        <label>Place Image</label>
                        <p><b><img src="<?php echo $row["tourimg1"]; ?>" height="300px" width="300px" /></b></p>
                    </div>
                    <div class="form-group">
                        <label>Place Image</label>
                        <p><b><img src="<?php echo $row["tourimg2"]; ?>" height="300px" width="300px" /></b></p>
                    </div>
                    <div class="form-group">
                        <label>Place Image</label>
                        <p><b><img src="<?php echo $row["tourimg3"]; ?>" height="300px" width="300px" /></b></p>
                    </div>
                    <div class="form-group">
                        <label>Place Name</label>
                        <p><b>
                                <?php echo $row["tourname"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Place information</label>
                        <p><b>
                                <?php echo $row["tourinfo"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>No of days</label>
                        <p><b>
                                <?php echo $row["tourdays"]; ?>
                            </b></p>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <p><b>
                                <?php echo $row["tourprice"]; ?>
                            </b></p>
                    </div>
                    <p><a href="adminmanagetourinfo.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>