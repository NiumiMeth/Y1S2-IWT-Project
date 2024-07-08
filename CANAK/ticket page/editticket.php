<?php
require 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $sql = "INSERT INTO ticket (Username, Email, RegistrationNumber, Faculty, ContactNumber, Message) 
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submitted Data</title>
</head>
<body>
  <h2>Submitted Data</h2>
  <p>Name: <?php echo isset($_POST["uname"]) ? $_POST["uname"] : ""; ?></p>
  <p>Email: <?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?></p>
  <p>Registration Number: <?php echo isset($_POST["rnumber"]) ? $_POST["rnumber"] : ""; ?></p>
  <p>Faculty: <?php echo isset($_POST["fac"]) ? $_POST["fac"] : ""; ?></p>
  <p>Contact Number: <?php echo isset($_POST["cnumber"]) ? $_POST["cnumber"] : ""; ?></p>
  <p>Message: <?php echo isset($_POST["msg"]) ? $_POST["msg"] : ""; ?></p>
</body>
</html>
