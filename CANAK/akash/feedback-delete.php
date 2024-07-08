<?php
session_start();
include 'akash/db_service.php';

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

// Insert Operation
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
