<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

$uid = $_SESSION['id'];
$uemail = $_SESSION['email'];

$con=new mysqli("localhost","root","","canak");

if($con->connect_error)
{
    die("connection failed".$con->connect_error);
} 

if (isset($_POST["update"])) {

        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $username = $_POST["uname"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];

        $sql = mysqli_query($con,"UPDATE register_std SET Fname = '$firstname', Lname= '$lastname', Email= '$email', Username = '$username', Phone = '$phone', Gender='$gender' WHERE id = '$uid' AND Email = '$uemail';");
        if ($sql === TRUE) {
                $_SESSION['email'] = $email;
                echo'<script>alert("User Account Updated Successfully!!");window.location="profile.php";</script>';
        }else{
                echo'<script>alert("User Account Updated Failed!!");window.location="profile.php";</script>';
        }
}

if (isset($_POST['delete'])) {
        $sql = mysqli_query($con,"DELETE FROM `register_std` WHERE id = '$uid' AND Email = '$uemail';");
        if ($sql === TRUE) {
                session_destroy();
                echo'<script>alert("User Account Deleted Successfully!!");window.location="../Login/login.php";</script>';
        }else{
                echo'<script>alert("User Account Deleted Failed!!");window.location="profile.php";</script>';
        }
}
if (isset($_POST['cancel'])) {
        echo'<script>alert("User Account Refreshed Successfully!!");window.location="profile.php";</script>';
}

if (isset($_POST['updatelogin'])) {
        $email = $_POST['email'];
        $password = $_POST['newpassword'];
        $renewpassword = $_POST['renewpassword'];

        if ($password != $renewpassword) {
                echo'<script>alert("Password are not matched!!");window.location="profile.php";</script>';
                exit();
        }

        if ($email != $uemail) {
                echo'<script>alert("Do not change the email!!");window.location="profile.php";</script>';
                exit();
        }

        $hashedPw = password_hash($renewpassword, PASSWORD_DEFAULT);

        $sql = mysqli_query($con,"UPDATE register_std SET Password = '$hashedPw' WHERE id='$uid' AND Email = '$uemail';");

        if ($sql === TRUE) {
                 echo'<script>alert("Password Change Successfully!!");window.location="profile.php";</script>';
        }else{
                echo'<script>alert("Password Change Failed!!");window.location="profile.php";</script>';
        }
}
?>