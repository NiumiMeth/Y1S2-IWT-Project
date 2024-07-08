<?php


require 'config.php';

$Username=$_POST["Username"];
$Email=$_POST["Email"];
$RegistrationNumber=$_POST["RegistrationNumber"];
$Faculty=$_POST["Faculty"];
$ContactNumber=$_POST["ContactNumber"];
$Messager=$_POST["Message"];


if(empty($Username)||empty($Email)||empty($RegistrationNumber)||empty($Faculty)||empty($ContactNumber)||empty($Messager))
{
    echo "ALL  Required";
}


	
	
	
	
	

else
{
    $sql1="UPDATE ticket set Username='$Username',Email='$Email',Faculty='$Faculty',ContactNumber='$ContactNumber',Message='$Messager' WHERE RegistrationNumber='$RegistrationNumber' ";
    
    if($con->query($sql1))
    {
        echo "Updated";
    }
    else
    {
        echo "NOT Updated";
    }
}

echo "<br><a href='ticketpage.php' style='text-decoration: none; '><button type='submit' value='read'>Back to View page</a></button>";

?>