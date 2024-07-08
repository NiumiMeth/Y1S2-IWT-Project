<?php
session_start();
//include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canak";

$con = mysqli_connect("localhost","root","","canak") or die("Error");

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "INSERT INTO `feedback` (name, email, nic, message)
            VALUES ('$name', '$email', '$nic', '$message')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Feedback Submitted Successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>University Helpdesk Feedback</title>
</head>
<body >
    <background: url("https://tse4.mm.bing.net/th?id=OIP.8fzSRv2e4HS0qT3jYVo3UAHaEK&pid=Api&P=0&h=220")>
    <form method="post">
        <div class="container">
            <br>
            <h4>University Helpdesk Feedback</h4>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="nic">NIC</label>
                        <input type="text" name="nic" id="nic" class="form-control" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary col-12">Submit Feedback</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
