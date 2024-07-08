<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="Lecturelist.css">
    <title>Admin Page - Lecture List</title>
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
                <a href="Lecturelist.php" class="active">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Lecture  List</h3>
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
            <h1>Lecture List</h1>
            <div class="Lecture-list">
                <table>
                    <thead>
                        <tr>
                            <th>Lecture_ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample student data -->
                        <tr>
                            <td>1</td>
                            <td>Althaf Marikkar</td>
                            <td>althaf@gmail.com</td>
                            <td>Computer Science</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Niumi Methma</td>
                            <td>methma@gmail.com</td>
                            <td>Psycology</td>
                            <td>Inactive</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chamath Yashohara</td>
                            <td>chamath@gmail.com</td>
                            <td>Computer Science</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>`4</td>
                            <td>Kavindya Sithumini</td>
                            <td>kavindya@gmail.com</td>
                            <td>Cyber Security</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Akash Sathsara</td>
                            <td>akash@gmail.com</td>
                            <td>Information Technology</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Dasun Shanaka</td>
                            <td>dasun@gmail.com</td>
                            <td>Agriculture</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sandeepa Subhabanis</td>
                            <td>sandeepa@gmail.com</td>
                            <td>Bio Medical</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Lasan Duwa</td>
                            <td>lasan@gmail.com</td>
                            <td>Electrical Engineering</td>
                            <td>Inactive</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Pasindu</td>
                            <td>pasindu@gmail.com</td>
                            <td>Civil Engineering</td>
                            <td>Inactive</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Bilal Marikkar</td>
                            <td>Bilal@gmail.com</td>
                            <td>Software Engineering</td>
                            <td>Inactive</td>
                        </tr>
                        <!-- Add more student rows as needed -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>