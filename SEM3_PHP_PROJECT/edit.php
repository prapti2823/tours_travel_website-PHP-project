<?php

require_once 'config.php';
$packid = $_GET['packid'];
$result = mysqli_query($con, "SELECT * FROM packages WHERE packid = $packid");
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
  if (!empty($_FILES['packimg']['tmp_name'])) {
    $packid = $_POST['packid'];
    $packimg = $_FILES['packimg'];
    $img_loc = $_FILES['packimg']['tmp_name'];
    $img_name = $_FILES['packimg']['name'];
    $img_des = "./img/" . $img_name;
    move_uploaded_file($img_loc, './img/' . $img_name);
    $result = mysqli_query($con, "UPDATE packages SET packimg='$img_des' WHERE packid = '$packid' ");
  }

  $packname = $_POST['packname'];
  $packdays = $_POST['packdays'];
  $packplaces = $_POST['packplaces'];
  $packprice = $_POST['packprice'];

  move_uploaded_file($img_loc, './img/' . $img_name);

  $result = mysqli_query($con, "UPDATE packages SET packname='$packname',packdays='$packdays',packplaces='$packplaces',packprice='$packprice' WHERE packid = '$packid' ");

  echo "<script>alert('Data Updated Successfully'); window.location.href='manage.php';</script>";
  exit;
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sky Bright Tours and Travels</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Edit Packages
          </div>
          <div class="card-body">
            <form class="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="image">Choose Image</label>
                <div class="col-md-4">
                  <!-- <img src="<?php echo $row['packimg'] ?>" width="200px" height="200px">
                        <input type="file" class="form-control" name="packimg" value="<?php echo $target_dir . $row['packimg']; ?>"> -->
                  <input type="file" name="packimg" value="<?php echo $row['packimg'] ?>"><img
                    src="<?php echo $row['packimg'] ?>" width='200px' height='70px' alt="">
                  <input type="hidden" name="Id" value="<?php echo $row['packid'] ?>">
                </div>
                <div class="form-group">
                  <label for="name">Package name</label>
                  <input type="text" class="form-control" name="packname" placeholder="Enter package name"
                    value="<?php echo $row['packname']; ?>">
                </div>
                <div class="form-group">
                  <label for="contact">Package Days</label>
                  <input type="text" class="form-control" name="packdays" placeholder="Enter Package Days"
                    value="<?php echo $row['packdays']; ?>">
                </div>
                <div class="form-group">
                  <label for="text">Package Places</label>
                  <input type="text" class="form-control" name="packplaces" placeholder="Enter Package places"
                    value="<?php echo $row['packplaces']; ?>">
                </div>
                <div class="form-group">
                  <label for="text">Package Price</label>
                  <input type="text" class="form-control" name="packprice" placeholder="Enter package price"
                    value="<?php echo $row['packprice']; ?>">
                </div>
              </div>
              <div class="form-group">
                <input type="hidden" name="packid" value="<?php echo $packid; ?>" />
                <button type="submit" name="submit" class="btn btn-primary waves">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>