<?php
    include("php/dbconfig.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Fname=$_POST["fname"];
        $Lname=$_POST["lname"];
        $email=$_POST["email"];
        $Tel=$_POST["phone"];
        $UID=$_POST["university_id"];
        $F1S1=$_POST["selectedSeat"];

        $sql="INSERT INTO res_form (F_name,L_name,email,P_number,uid,selected_seat) VALUES ('$Fname','$Lname','$email','$Tel','$UID','$F1S1')";

        if(mysqli_query($con,$sql)){
            echo"<p>Submitted!</p><br>";

        }else{
            echo "Error: ". $sql . "<br>" . mysqli_error($con);
        }

    }
    
?>