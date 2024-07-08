<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Help Desk Tickets</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
  <h2>Help Desk Tickets - Admin Panel</h2>
  <?php
    require 'config.php';

    // Fetch all tickets from the database
    $sql = "SELECT * FROM ticket";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      // Output data of each row
      echo "<table>";
      echo "<tr><th>Username</th><th>Email</th><th>Registration Number</th><th>Faculty</th><th>Contact Number</th><th>Message</th><th>Actions</th></tr>";
      while($row = $result->fetch_assoc()) 
      {
        ?>
        <tr>
        <td><?php echo $row["Username"]?></td>
        <td><?php echo $row["Email"]?></td>
        <td><?php echo $row["RegistrationNumber"]?></td>
        <td><?php echo $row["Faculty"]?></td>
        <td><?php echo $row["ContactNumber"]?></td>
        <td><?php echo $row["Message"]?></td>
        <td><a href='delete.php?ID=<?php echo $row['RegistrationNumber']; ?>'>Delete</a></td>
        </tr>
        <?php
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
  ?>
</body>
</html>
