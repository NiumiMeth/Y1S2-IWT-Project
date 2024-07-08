<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canak";

$con = mysqli_connect("localhost","root","","canak") or die("Error");

//$con = new mysqli($servername, $username, $password, $dbname); //Creating connection 

if($con -> connect_error){ //Checking whether the database is connected successfully
    die("Connection error : " .$con -> connect_error);
}


?>