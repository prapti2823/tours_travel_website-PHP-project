<?php
// Check existence of id parameter before processing further
if(isset($_GET["packid"]) && !empty(trim($_GET["packid"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM packages WHERE packid = ?";
    
    if($stmt = mysqli_prepare($con, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["packid"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $packimg = $row['packimg'];
                $packname = $row["packname"];
                $packdays = $row["packdays"];
                $packplaces = $row["packplaces"];
                $packprice = $row["packprice"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                // header("location: packageerror.php");
                // exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($con);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: packageerror.php");
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
        .wrapper{
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
                        <p><b><img src="<?php echo $row["packimg"]; ?>" height="300px" width="300px"/></b></p>
                    </div>
                    <div class="form-group">
                        <label>Place Name</label>
                        <p><b><?php echo $row["packname"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>No of days</label>
                        <p><b><?php echo $row["packdays"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Places included in the package</label>
                        <p><b><?php echo $row["packplaces"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <p><b><?php echo $row["packprice"]; ?></b></p>
                    </div>
                    <p><a href="manage.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>