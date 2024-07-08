<!DOCTYPE html>
<html lang="en">
<head>
        <title>CANAK University Help Desk</title>
        <!-- External CSS and Font Awesome for icons -->
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li class="active"><a href="contact admin.php">Contact Admin</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Resourses status</a></li>
                    </ul>
                </nav>
                <!-- Authentication Buttons -->
                <div class="auth-buttons">
                    <button id="login">LOG IN</button>
                    <button id="logout">LOG OUT</button>
                </div>
            </div>
        </header>

    <div class="form-container">
        <h2>Contact Admin</h2>
        <form action="submit_form.php" method="post">
            <div class="form-group">
                <label for="idNumber">Library code:</label>
                <input type="text" id="idNumber" name="idNumber" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="inquiry">Inquiry:</label>
                <textarea id="inquiry" name="inquiry" rows="5" required></textarea>
            </div>
            <button type="submit">Send Inquiry</button>
        </form>
    </div>


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
