<?php
require 'php/dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $selectedSeat = isset($_POST['selectedSeat']) ? mysqli_real_escape_string($con, $_POST['selectedSeat']) : '';

    // Update the data in the database
    $sql = "UPDATE res_form SET selected_seat='$selectedSeat' WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

$con->close();
?>
