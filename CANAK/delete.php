<?php
require 'php/dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    // Delete the record from the database
    $sql = "DELETE FROM res_form WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}

$con->close();
?>
