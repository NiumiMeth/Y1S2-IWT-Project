<?php include("config.php"); ?>

<?php

    if(isset($_GET['ID']))
    {
        $ID = $_GET['ID'];
    }

    $query = "DELETE FROM ticket WHERE RegistrationNumber = '$ID'";

    $result = mysqli_query($con,$query);

    if(!$result)
    {
        die("Query failed".mysqli_error());
    }
    else
    {
        header('location:supportservicemanager.php?delete_msg=You have deleted data.');
    }
?>