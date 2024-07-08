<?php

require 'config.php';


$RegistrationNumber=$_POST["RegistrationNumber"];

$sql1="DELETE FROM ticket WHERE RegistrationNumber='$RegistrationNumber'";

if($con->query($sql1))
{
    echo "<br>Deleted";
}
else
{
    echo "NOT Deleted";
}

echo "<br><button type='submit' value='read'><a href='ticketpage.php' style='text-decoration: none; ;'>Back to View page</button>";

?>
