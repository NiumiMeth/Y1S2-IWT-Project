<!DOCTYPE html>
<html lang="en">
<head>
    <title>CANAK University Help Desk</title>
    <!-- External CSS and Font Awesome for icons -->
    <link rel="stylesheet" href="style/libary style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/library script.js"></script>
</head>
<body>
    <!-- Header with Navigation Bar -->
    <header>
        <div class="nav">
            <!-- University Icon or Logo -->
            <div class="icon">CANAK UNIVERSITY</div>
            <!-- Navigation Links -->
            <nav>
                <ul>
                    <li><a href="online library.php">Home</a></li>
                    <li><a href="contact admin.php">Contact Admin</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Resourses status</a></li>
                </ul>
            </nav>
            <!-- Authentication Buttons -->
            <div class="auth-buttons">
                <button id="login">LOG IN</button>
            </div>
        </div>
    </header>

        <main class="dashboard-main">
            <section id="book-management" class="dashboard-section">
                <h2>Manage Books</h2>
                <button onclick="showModal('add-book-modal')" class="btn">Add New Book</button>
                <input type="text" placeholder="Search books..." oninput="filterBooks(this.value)" class="search-input">
                <div id="book-list" class="book-list"></div>
            </section>

            <section id="user-inquiries" class="dashboard-section">
                <h2>User Inquiries</h2>
                <button onclick="refreshInquiries()" class="btn">Refresh Inquiries</button>
                <ul id="reservation-list" class="reservation-list"></ul>
            </section>

            
            <section id="reservation-system" class="dashboard-section">
                <h2>Reservations</h2>
                <button onclick="showModal('add-reservation-modal')" class="btn">Add Reservation</button>               
                <div id="inquiry-list" class="inquiry-list">
                    <button class="view-table-btn"><a href="edit_f.php">View Table</a></button>
                </div>
            </section>

            <section id="reports" class="dashboard-section">
                <h2>Generate Reports</h2>
                <button onclick="generateReport('monthly')" class="btn">Monthly</button>
                <button onclick="generateReport('annual')" class="btn">Annual</button>
            </section>
        </main>

            <!-- Footer Section -->
    <footer>
        <div class="footer">
            <div class="col-1">
                <a href="Feedback.php">Provide Feedback</a>
                <div class="row-1">info@CANAK.lk</div>
                <div class="row-2">Copyright 2024 © CANAK. All Rights Reserved.</div>
            </div>
            <div class="col-2">
            <div class = "imgarea">
                <img src="images/qr-code.WEBP" class="qr-code">
                </div>
                <!-- Social Media Links -->
                <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                <a href="https://www.google.com" class="fa fa-google"></a>
                <a href="https://www.instagram.com" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fa fa-linkedin"></a>
            </div>
        </div>
    </div>
    </footer>

</body>
</html>
