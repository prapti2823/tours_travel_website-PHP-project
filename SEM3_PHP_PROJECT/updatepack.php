<?php

// if(isset($_POST['update_product'])){
//     $packid = $_POST['packid'];
//     $packimg = $_FILES['packimg']['name'];
//     $packimg_tmp_name = $_FILES['packimg']['tmp_name'];
//     $packimg_folder = './img'.$packimg;
//     $packname = $_POST['packname'];
//     $packdays = $_POST['packdays'];
//     $packplaces = $_POST['packplaces'];
//     $packprice = $_POST['packprice'];
//     $update_query = mysqli_query($con,"UPDATE packages SET packimg = '$packimg', packname = '$packname',  packdays = '$packdays', packplaces = '$packplaces', packprice = '$packprice' WHERE id = '$packid'");
 
//     if($update_query){
//        move_uploaded_file($packimg_tmp_name, $packimg_folder);
//        $message[] = 'package updated succesfully';
//        header('location:manage.php');
//     }else{
//        $message[] = 'package could not be updated';
//        header('location:manage.php');
//     }
//  }

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
 $packimg = $packname = $packdays = $packplaces = $packprice = "";
 $packimg_err = $packname_err = $packdays_err = $packplaces_err = $packprice_err ="";
 
// Processing form data when form is submitted
if(isset($_POST["packid"]) && !empty($_POST["packid"])){
    // Get hpackageidden input value
    $packid = $_POST["packid"];

    // $input_packimg = trim($_POST["packimg"]);
    if(isset($_FILES['packimg']['name']) && ($_FILES['packimg']['name'] != '')){
        $oldimg = $_FILES['packimg']['name'];
        $temp = $_FILES['packimg']['tmp_name'];
        move_uploaded_file($temp,"./img/$packimg");
    } 
    else{
        $packimg = $oldimg;
    }

    // Validate packagename elseif(!filter_var($input_packname, FILTER_VALidATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){$packname_err = "Please enter a valpackageid packagename." } 
    $input_packname = trim($_POST["packname"]);
    if(empty($input_packname)){
        $packname_err = "Please enter packagename.";
    } else{
        $packname = $input_packname;
    }
    
    // Validate address address
    $input_packdays = trim($_POST["packdays"]);
    if(empty($input_packdays)){
        $packdays_err = "Please enter packagedays";     
    } else{
        $packdays = $input_packdays;
    }
    
    // Validate salary elseif(!ctype_digit($input_salary)){ $packplaces_err = "Please enter a positive integer value.";}
    $input_packplaces = trim($_POST["packplaces"]);
    if(empty($input_packplaces)){
        $packplaces = "Please enter the packageplaces";     
    }  else{
        $packplaces = $input_packplaces;
    }

    $input_packprice = trim($_POST["packprice"]);
    if(empty($input_packprice)){
        $packprice = "Please enter the package price";     
    }  else{
        $packprice = $input_packprice;
    }

    /*$input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password = "Please enter the packageplaces";     
    }  else{
        $password = $input_password;
    }*/
    
    // Check input errors before inserting in database
    if(file_exists($packimg_err) && empty($packname_err) && empty($packdays_err) && empty($packplaces_err) && empty($packprice_err)){
        // Prepare an update statement
        $sql = "UPDATE packages SET packimg=? packname=?, packdays=?, packplaces=?, packprice=? WHERE packid =?";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_packid, $param_packname, $param_packdays, $param_packplaces, $packprice, $param_packid);
            
            // Set parameters
             $param_packimg = $packimg;
            $param_packname = $packname;
            $param_packdays = $packdays;
            $param_packplaces = $packplaces;
            $param_packprice = $packprice;
            $param_packid = $packid;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successy. Redirect to landing page
                header("location: manage.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        // mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["packid"]) && !empty(trim($_GET["packid"]))){
        // Get URL parameter
        $packid =  trim($_GET["packid"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM packages WHERE packid = ?";
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_packid);
            
            // Set parameters
            $param_packid = $packid;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $packimg = $row["packimg"];
                    $packname = $row["packname"];
                    $packdays = $row["packdays"];
                    $packplaces = $row["packplaces"];
                    $packprice = $row["packprice"];
                    // $password = $row["password"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: packageerror.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($con);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: packageerror.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="edit.php" method="post">
                    <div class="form-group">
                            <label>Package Image</label>
                            <input type="file" name="packimg" class="form-control <?php echo (!empty($packimg_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $packimg; ?>">
                            <span class="invalid-feedback"><?php echo $packimg_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Package Name</label>
                            <input type="text" name="packname" class="form-control <?php echo (!empty($packname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $packname; ?>">
                            <span class="invalid-feedback"><?php echo $packname_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Package Days</label>
                            <input type="text" name="packdays" class="form-control <?php echo (!empty($packdays_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $packdays; ?>">
                            <span class="invalid-feedback"><?php echo $packdays_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Package Places</label>
                            <input type="text" name="packplaces" rows="5" cols="30" class="form-control <?php echo (!empty($packplaces_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $packplaces; ?>"/>
                            <span class="invalid-feedback"><?php echo $packplaces_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Package Price</label>
                            <input type="text" name="packprice" class="form-control <?php echo (!empty($packprice_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $packprice; ?>">
                            <span class="invalid-feedback"><?php echo $packprice_err;?></span>
                        </div>
                        <!--<div class="form-group">
                            <label>Operations</label>
                            <input type="password" packagename="password" class="form-control </*?php echo (!empty($password_err)) ? 'is-invalpackageid' : ''; ?>" value="</*?php echo $password; ?>*/">
                            <span class="invalid-feedback"></*?php echo $password_err;?*/></span>
                        </div>-->
                        <input type="hidden" name="packageid" value="<?php echo $packid; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="manage.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>