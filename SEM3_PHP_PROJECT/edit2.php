<?php
require_once 'config.php';
if(isset($_POST['submit'])){
    $packid = $_POST['packid'];
    $packimg = $_FILES['packimg'];
    $img_loc = $_FILES['packimg']['tmp_name'];
    $img_name = $_FILES['packimg']['name'];
    $img_des = "./img/".$img_name;
    $packname = $_POST['packname'];
    $packdays = $_POST['packdays'];
    $packplaces = $_POST['packplaces'];
    $packprice = $_POST['packprice'];
    
    move_uploaded_file($img_loc,'./img/'.$img_name);

    mysqli_query($con,"UPDATE packages SET packimg='$img_des', packname='$packname',packdays='$packdays',packplaces='$packplaces',packprice='$packprice', WHERE packid = '$packid' ");
    header("location:index.php");


}

?>