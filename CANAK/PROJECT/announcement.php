<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="announce.css">
    <title>Announcement Page</title>
</head>
<body>
    <div class="container">
        <aside>
             <div class="toggle">
                <div class="logo">
                    <img src="images/CANAK.jpeg">
                    <h2>CANAK<span class="danger">UNI</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
             </div>
             <div class="sidebar">
                <a href="Admin.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="User.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>User Managment</h3>
                </a>
                <a href="History.php">
                    <span class="material-icons-sharp">
                        history
                    </span>
                    <h3>History</h3>
                </a>
                <a href="announcement.php" class="active">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Announcement</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Tickets</h3>
                    <span class="message_count">27</span>
                </a>
                <a href="Lecturelist.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Lecture List</h3>
                </a>
                <a href="loginAD.php">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>New Login</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Log out</h3>
                </a>
             </div>
        </aside>
        <main>
        <?php
    include("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $faculty = $_POST["faculty"];
        $title = $_POST["title"];
        $date = $_POST["date"];
        $message = $_POST["message"];

        $sql = "INSERT INTO announcement (Faculty,Title, Date, Message) VALUES ('$faculty','$title', '$date', '$message')";

        if(mysqli_query($con, $sql)){
            echo "<div class='message'>
            <p> submitted!</p>
        </div> <br>";

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    ?>
            <div class="container">
                <form action="" method="POST">
                    <h2>Create New Announcement</h2>
                    <div class="form-group">
                        <label for="faculty">Faculty:</label>
                        <input type="text" id="faculty" name="faculty" placeholder="Enter the Faculty" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" placeholder="Enter the title of the announcement" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" placeholder="Enter the announcement message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Submit</button>
                        <a href="update.php"><button type="button">Update</button></a>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>

