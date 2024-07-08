<?php
    include("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $faculty = $_POST["faculty"];
        $title = $_POST["title"];
        $date = $_POST["date"];
        $message = $_POST["message"];

        $sql = "INSERT INTO greetings (Faculty, Title, Date, Message) VALUES ('$faculty','$title', '$date', '$message')";

        if(mysqli_query($con, $sql)){
            echo "<div class='message'>
            <p> submitted!</p>
        </div> <br>";
        echo "<a href='Home1.php'><button class='btn'>Go to Home</button>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    ?>