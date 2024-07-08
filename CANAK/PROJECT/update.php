<?php
include 'config.php'; // Include your database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Internal CSS styles */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table thead th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table tbody td {
            border: 1px solid #ddd;
            padding: 8px; /* Add padding to all sides */
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #ddd;
        }

        .table th,
        .table td {
            padding-right: 20px; /* Add space between columns */
        }
    </style>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Faculty</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Message</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

        <?php
            $sql = "SELECT * FROM `announcement`"; // corrected the quotes around 'contact'
            $result = mysqli_query($con, $sql);
            if ($result) {
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id']; // corrected column name to 'id'
                    $Faculty = $row['Faculty'];
                    $Title = $row['Title'];
                    $Date = $row['Date'];
                    $Message = $row['Message'];
                    
                    echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $Faculty . '</td>
                            <td>' . $Title . '</td>
                            <td>' . $Date . '</td>
                            <td>' . $Message . '</td>
                            <td>
                            <button><a href="updateAnc.php?
                            updateid='.$id.'">Update</a></button>
                            <button><a href="deleteAnc.php?
                            deleteid='.$id.'">Delete</a></button>
                        </td>
                            </tr>';
                }
            }
        ?>

        </tbody>
    </table>
</body>
</html>
