<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="loginAD.css"> <!-- Ensure this path is correct -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Login Page</title>
    <style>
        /* Add any additional CSS styles specific to the login page here */
    </style>
</head>
<body>
    <div class="container">
        <aside>
             <!-- Sidebar content -->
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
                <a href="Admin.php" class="active">
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
                <a href="announcement.php" >
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
                <a href="loginAD.php" class>
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
            <!-- Login form content -->
            <main>
                <div class="header">
                    <h1>Login as Admin</h1>
                </div>
                <div class="container">
                    <form action="#">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                </div>
            </main>
        </main>    
</body>
</html>
