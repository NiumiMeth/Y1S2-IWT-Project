<?php
require 'config.php';

// Check if form is submitted
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST["uname"]) && isset($_POST["email"]) && isset($_POST["rnumber"]) && isset($_POST["fac"]) && isset($_POST["cnumber"]) && isset($_POST["msg"])) {
        // Retrieve form data
        $name = $_POST["uname"];
        $email = $_POST["email"];
        $r_num = $_POST["rnumber"];
        $fac = $_POST["fac"];
        $contact = $_POST["cnumber"];
        $msg = $_POST["msg"];

        // Prepare and execute SQL statement
        $sql = "INSERT INTO ticket (Username, Email, RegistrationNumber, Faculty, ContactNumber, message) 
        VALUES ('$name', '$email', '$r_num', '$fac', '$contact', '$msg')";

        if ($con->query($sql)) {
            echo "Ticket submitted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "Error: All fields are required.";
    }
} else {
    echo "Error: Form not submitted.";
}
?>

