<?php
session_start();
//include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canak";

$con = mysqli_connect("localhost","root","","canak") or die("Error");

// Fetch feedback details for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `feedback` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
}

// Update Operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "UPDATE `feedback` SET name='$name', email='$email', nic='$nic', message='$message' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Feedback updated successfully!";
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

    <title>Edit Feedback</title>
</head>
<body>
    <div class="container">
        <br>
        <h4>Edit Feedback</h4>
        <hr>
        <form method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $row['name'] ?>" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $row['email'] ?>" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="nic">NIC</label>
                        <input type="text" name="nic" id="nic" class="form-control" value="<?= $row['nic'] ?>" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" required><?= $row['message'] ?></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <br>
                    <button type="submit" name="update" class="btn btn-primary col-12">Update Feedback</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
