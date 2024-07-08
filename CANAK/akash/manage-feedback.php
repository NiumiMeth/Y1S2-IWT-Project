<?php
session_start();
//include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canak";

$con = mysqli_connect("localhost","root","","canak") or die("Error");

// Delete Operation
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `feedback` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Feedback deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
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

// Fetch All Feedbacks
$sql = "SELECT * FROM `feedback`";
$result = mysqli_query($con, $sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Manage Feedbacks</title>
</head>
<body>
    <div class="container">
        <br>
        <h4>Manage Feedbacks</h4>
        <hr>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>NIC</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['nic'] ?></td>
                                <td><?= $row['message'] ?></td>
                                <td>
                                    <a href="edit_feedback.php?id=<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                                    <a href="?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
