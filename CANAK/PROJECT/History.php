<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="History.css">
    <title>Admin Page - History</title>
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
                <a href="History.php" class="active">
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
            <h1>Admin History Page</h1>
            <div class="History">
                <section id="history">
                    <div class="history-item">
                        <h3>Ticket Approval</h3>
                        <p>Approved ticket #123</p>
                        <small>2024-04-25 10:30 AM</small>
                    </div>
                    <div class="history-item">
                        <h3>User Account Management</h3>
                        <p>Added staff account "JohnDoe"</p>
                        <small>2024-04-24 11:45 AM</small>
                    </div>
                    <div class="history-item">
                        <h3>User Account Management</h3>
                        <p>Added staff account "JohnDoe"</p>
                        <small>2024-04-24 11:45 AM</small>
                    </div>
                    <div class="history-item">
                        <h3>User Account Management</h3>
                        <p>Added staff account "JohnDoe"</p>
                        <small>2024-04-24 11:45 AM</small>
                    </div>
                    <div class="history-item">
                        <h3>User Account Management</h3>
                        <p>Added staff account "JohnDoe"</p>
                        <small>2024-04-24 11:45 AM</small>
                    </div>
                    <div class="history-item">
                        <h3>User Account Management</h3>
                        <p>Added staff account "JohnDoe"</p>
                        <small>2024-04-24 11:45 AM</small>
                    </div>
                    <!-- Add more history items as needed -->
                </section>
            </div>
        </main>
    </div>
</body>
</html>