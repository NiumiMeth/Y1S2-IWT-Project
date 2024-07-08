<?php
$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'canak';

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$conn) {
    die('Database Connection Lost');
}

function emptyInputs($firstname,$lastname,$email,$username,$password,$confirmPassword,$phone,$gender){
    if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) ||  empty($confirmPassword) || empty($phone) || empty($gender)) {
        return TRUE;
    }else{
        return FALSE;
    }
}

function macthPw($password,$confirmPassword){
    if ($password !== $confirmPassword) {
       return FALSE;
    }else{
        return TRUE;
    }
}

function userAccExist($conn,$email){
    $sql = mysqli_query($conn, "SELECT * FROM register_std WHERE email='$email';");
    $row = mysqli_fetch_assoc($sql);
    if (!empty($row)) {
        return TRUE;
    }else{
        return FALSE;
    }
}

function usernameExist($conn,$username){
    $sql = mysqli_query($conn, "SELECT * FROM register_std WHERE username='$username';");
    $row = mysqli_fetch_assoc($sql);
    if (!empty($row)) {
        return TRUE;
    }else{
        return FALSE;
    }
}

function checkAgreement($agreement){
    if ($agreement == 'agree') {
        return TRUE;
    }else{
        return FALSE;
    }
}

function createaccount($conn,$firstname,$lastname,$email,$username,$password,$confirmPassword,$phone,$gender){
    $hashed_pw = password_hash($password, PASSWORD_DEFAULT);

    $sql = mysqli_query($conn,"INSERT INTO register_std(Fname,Lname,Email,Username,Password,Phone,Gender) VALUES ('$firstname','$lastname','$email','$username','$hashed_pw','$phone','$gender');");

    if ($sql === TRUE) {
        return TRUE;
    }else{
        return FALSE;
    }
}



if (isset($_POST['submit'])) {


    $firstname = $_POST["firstname"] ;
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $agreement = $_POST["agreement"] ;

    $emptyInputs = emptyInputs($firstname,$lastname,$email,$username,$password,$confirmPassword,$phone,$gender);
    $macthPw = macthPw($password,$confirmPassword);
    $userAccExist = userAccExist($conn,$email);
    $usernameExist = usernameExist($conn,$username);
    $checkAgreement = checkAgreement($agreement);


    
    if ($emptyInputs == TRUE) {
        header('location:register.php?error=emptyinputs');
        exit();
    }
    if ($macthPw == FALSE) {
        header('location:register.php?error=unmatchpassword');
        exit();
    }
    if ($userAccExist == TRUE) {
        header('location:register.php?error=useraccountexist');
        exit();
    }
    if ($usernameExist == TRUE) {
        header('location:register.php?error=usernameexist');
        exit();
    }
    if ($checkAgreement == FALSE) {
        header('location:register.php?error=agreement');
        exit();
    }
    

    $createAcc = createaccount($conn,$firstname,$lastname,$email,$username,$password,$confirmPassword,$phone,$gender);

    if ($createAcc == TRUE) {
        echo "<script>alert('User Account Created Successfully!!');window.location='login.php';</script>";
    }else{
         echo "<script>alert('User Account Creation Failed. Try Again Later!!');window.location='register.php';</script>";
    }

}
?>