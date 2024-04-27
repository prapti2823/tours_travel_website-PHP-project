<?php
session_start();
$userprofile = $_SESSION['user_name'];
if($userprofile == true)
{
  echo "Welcome ".$_SESSION['user_name'];
}
else{
  header('location:login.php');
}



include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharma Care</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container bg-dark text-light p-3 rounded my-3">
        <div class="d-flex align-items-center justify-content-between px-3">    
            <h2>
                <a href="index.php" class="text-white text-decoration-none">Medical Product</a>
            </h2>

            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#addproduct">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg>Add Product
            </button>
            <a href="logout.php"><button type="submit" class="btn btn-primary" name="logout">LogOut</button></a>
        </div>
    </div>

<div class="container mt-5 p-0">
<table class="table table-hover text-center">
  <thead class="table-dark text-light">
    <tr>
      <th width="10%" scope="col" class="rounded-start">Sr No.</th>
      <th width="15%" scope="col">Image</th>
      <th width="10%" scope="col">Name</th>
      <th width="10%" scope="col">Price</th>
      <th width="35%" scope="col">Description</th>
      <th width="20%" scope="col" class="rounded-end">Action</th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <?php
    $query="SELECT * FROM `crud`";
    $result=mysqli_query($con,$query);
    $i=1;
    $fetch_src=FETCH_SRC;

    while($fetch=mysqli_fetch_assoc($result))
    {
        echo"
        <tr class='align-middle'>
      <th scope='row'>$i</th>
      <td><img src='$fetch_src$fetch[image]' width='150px'></td>
      <td>$fetch[name]</td>
      <td>$fetch[price]</td>
      <td>$fetch[description]</td>
      <td>
      <a>Edit</a>
      <button>Delete</button>
      </td>
    </tr>";
    }
    ?>
    
    
  </tbody>
</table>
</div>
    
    
    
    
    
    
    
    
    
    <div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="index.html" method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Add Product</h1>
      </div>
      <div class="modal-body">
      <div class="input-group mb-3">
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" name="name" required>
      </div>
      <div class="input-group mb-3">
            <span class="input-group-text">Price</span>
            <input type="number" class="form-control" name="price" min="1" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" name="desc" required></textarea>
      </div>
      
      <div class="input-group mb-3 ">
        <label class="input-group-text">Image</label>
        <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg" required>
      </div>
      </div>
      
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="submit" class="btn btn-success" name="addproduct">Add</button>
      </div>
    </div>
    </form>
  </div>
</div>    
</body>
</html>