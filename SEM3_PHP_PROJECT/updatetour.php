<?php

require_once 'config.php';
$tourid = $_GET['tourid'];
$result = mysqli_query($con, "SELECT * FROM tourinfo WHERE tourid = $tourid");
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
    $tourid = $_POST['tourid'];

    // Check if the first image is selected for update
    if (!empty($_FILES['tourimg1']['tmp_name'])) {
        $tourimg1 = $_FILES['tourimg1'];
        $img_loc = $_FILES['tourimg1']['tmp_name'];
        $img_name = $_FILES['tourimg1']['name'];
        $img_des = "./img/" . $img_name;
        move_uploaded_file($img_loc, './img/' . $img_name);
        $result = mysqli_query($con, "UPDATE tourinfo SET tourimg1='$img_des' WHERE tourid = '$tourid' ");
    }

    // Check if the second image is selected for update
    if (!empty($_FILES['tourimg2']['tmp_name'])) {
        $tourimg2 = $_FILES['tourimg2'];
        $img_loc2 = $_FILES['tourimg2']['tmp_name'];
        $img_name2 = $_FILES['tourimg2']['name'];
        $img_des2 = "./img/" . $img_name2;
        move_uploaded_file($img_loc2, './img/' . $img_name2);
        $result = mysqli_query($con, "UPDATE tourinfo SET tourimg2='$img_des2' WHERE tourid = '$tourid' ");
    }

    // Check if the third image is selected for update
    if (!empty($_FILES['tourimg3']['tmp_name'])) {
        $tourimg3 = $_FILES['tourimg3'];
        $img_loc3 = $_FILES['tourimg3']['tmp_name'];
        $img_name3 = $_FILES['tourimg3']['name'];
        $img_des3 = "./img/" . $img_name3;
        move_uploaded_file($img_loc3, './img/' . $img_name3);
        $result = mysqli_query($con, "UPDATE tourinfo SET tourimg3='$img_des3' WHERE tourid = '$tourid' ");
    }

    // Update the remaining fields
    $tourname = $_POST['tourname'];
    $tourinfo = $_POST['tourinfo'];
    $tourdays = $_POST['tourdays'];
    $tourprice = $_POST['tourprice'];

    $result = mysqli_query($con, "UPDATE tourinfo SET tourname='$tourname',tourinfo='$tourinfo', tourdays='$tourdays', tourprice='$tourprice' WHERE tourid = '$tourid' ");

    echo "<script>alert('Data Updated Successfully'); window.location.href='adminmanagetourinfo.php';</script>";
    exit;
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sky Bright Tours and Travels</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Edit tour
                    </div>
                    <div class="card-body">
                        <form class="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Choose Image</label>
                                <div class="col-md-4" style="padding:10px;">
                                    <input type="file" name="tourimg1" value="<?php echo $row['tourimg1'] ?>"
                                        style="padding:5px;">
                                    <img src="<?php echo $row['tourimg1'] ?>" width='200px' height='100px' alt="">
                                    <input type="hidden" name="tourid" value="<?php echo $row['tourid'] ?>">
                                </div>
                                <div class="col-md-4" style="padding:10px;">
                                    <input type="file" name="tourimg2" value="<?php echo $row['tourimg2'] ?>"
                                        style="padding:5px;">
                                    <img src="<?php echo $row['tourimg2'] ?>" width='200px' height='100px' alt="">
                                    <input type="hidden" name="tourid" value="<?php echo $row['tourid'] ?>">
                                </div>
                                <div class="col-md-4" style="padding:10px;">
                                    <input type="file" name="tourimg3" value="<?php echo $row['tourimg3'] ?>"
                                        style="padding:5px;">
                                    <img src="<?php echo $row['tourimg3'] ?>" width='200px' height='100px' alt="">
                                    <input type="hidden" name="tourid" value="<?php echo $row['tourid'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Tour name</label>
                                    <input type="text" class="form-control" name="tourname"
                                        placeholder="Enter Tour name" value="<?php echo $row['tourname']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Tour Information</label>
                                    <textarea type="text" class="form-control" rows="7"
                                        name="tourinfo"> <?php echo $row['tourinfo']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Tour Days</label>
                                    <input type="text" class="form-control" name="tourdays"
                                        placeholder="Enter Tour Days" value="<?php echo $row['tourdays']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="text">Tour Price</label>
                                    <input type="text" class="form-control" name="tourprice"
                                        placeholder="Enter Tour price" value="<?php echo $row['tourprice']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="tourid" value="<?php echo $tourid; ?>" />
                                <button type="submit" name="submit" class="btn btn-primary waves">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</body>

</html>