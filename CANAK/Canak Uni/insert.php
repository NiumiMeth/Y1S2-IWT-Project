<?php 

require'connect.php';

function emptyinputs($username,$password){
    if (empty($username) || empty($password)) {
        return TRUE;
    }else{
        return FALSE;
    }
}
function invalidUname($con,$username){
    $sql = mysqli_query($con,"SELECT * FROM register_std WHERE Username = '$username'  OR Email = '$username' ;");
    $row = mysqli_fetch_assoc($sql);

    if (!empty($row)) {
        return FALSE;
    }else{
        return TRUE;
    }
}

function loginAcc($con,$username,$password){
    $sql = mysqli_query($con,"SELECT * FROM register_std WHERE Username = '$username' OR Email = '$username' ;");
    $row = mysqli_fetch_assoc($sql);


    $verifyPw = password_verify($password, $row['Password']);
    if ($verifyPw == TRUE) {
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['Email'];
        echo "<script>window.location='../home.php';</script>";
    }else{
        header('location:login.php?error=invalidpassword');
        exit();
    }

}



if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $emptyinputs = emptyinputs($username,$password);
    $invalidUname = invalidUname($con,$username);

    if($username === "admin@123" && $password === "admin123") {
        // Redirect admin to admin dashboard 
        header("Location:../PROJECT/Admin.php");
        exit(); // Stop further execution
    }

    if($username === "librarian@123" && $password === "librarian123") {
        // Redirect admin to librarian dashboard 
        header("Location:../librarian.php");
        exit(); // Stop further execution
    }

    if ($emptyinputs == TRUE) {
        header('location:login.php?error=emptyinputs');
        exit();
    }
    if ($invalidUname == TRUE) {
        header('location:login.php?error=invalidusername');
        exit();
    }

    loginAcc($con,$username,$password);
}

?>
