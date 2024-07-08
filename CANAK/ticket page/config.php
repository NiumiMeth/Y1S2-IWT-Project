<?php

    $con = mysqli_connect("localhost","root","","canak");

    if($con -> connect_error){
        die("Connection failed".$con->connect_error);
    }
    
    else{
       echo "Sucessful";
    }



?>