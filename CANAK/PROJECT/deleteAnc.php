<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM announcement WHERE id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "<script>alert('Data updated successfully!!'); window.location='update.php';</script>";
    }
    else{
        die(mysqli_error($con));
    }
}
?>
