<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="review.css">
</head>
<body>

<?php
require 'config.php';

function readData()
{
    global $con;
    $sql = "SELECT id, Faculty, Title, Date, Message FROM announcement";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='announcement-container'>";
        echo "<h1>Announcements</h1>"; // Title for the announcements
        echo "<table class='announcement-table'>";
        echo "<tr>";
        echo "<th>Faculty</th>";
        echo "<th>Title</th>";
        echo "<th>Date</th>";
        echo "<th>Message</th>";
        echo "</tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Faculty"] . "</td>";
            echo "<td>" . $row["Title"] . "</td>";
            echo "<td>" . $row["Date"] . "</td>";
            echo "<td>" . $row["Message"] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='announcement-container'>";
        echo "<h1>No Announcements Found</h1>";
        echo "</div>";
    }
    $con->close();
}

readData();
?>

</body>
</html>

