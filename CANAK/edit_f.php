<?php
require 'php/dbconfig.php';

function readData()
{
    global $con;
    $sql = "SELECT id,F_name,L_name,email,P_number,uid,selected_seat FROM res_form";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table style='border-collapse: collapse; width: 100%;'>";
        echo "<tr style='background-color: #f2f2f2;'>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>ID</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>First Name</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Last Name</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Email</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Phone</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Uni ID</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Seat No</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Edit Seat</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Delete recoed</th>";

        echo "</tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["id"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["F_name"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["L_name"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["email"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["P_number"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["uid"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["selected_seat"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>";
            echo "<form action='update.php' method='POST'>";
            echo "<input type='text' name='selectedSeat' value='" . $row["selected_seat"] . "'><br>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<input type='submit' name='update' value='Update'>";
            echo "</form>";
            echo "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>";
            echo "<form action='delete.php' method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<input type='submit' name='delete' value='Delete'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No results";
    }
    $con->close();
}

readData();
?>
