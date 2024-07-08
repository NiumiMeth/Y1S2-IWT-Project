<!DOCTYPE html>
<html>
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
                        <li class="active"><a href="researve learning space.php">Reserve Learning Space</a></li>
                        <li><a href="researve discussion space.php">Reserve Discussion Space</a></li>
                        <li><a href="ask librarian.php">Ask librarian</a></li>
                    </ul>
                </nav>
                <!-- Authentication Buttons -->
                <div class="auth-buttons">
                    <button id="login">LOG IN</button>
                </div>
            </div>
        </header>

  
    <h2><center>User Information Form</center></h2>

    <?php
include("php/dbconfig.php");

?>

<div class="form-container">
    <form action="submit_form.php" method="POST">
        <div class="productData">
            <center>
                <!-- Form Fields for User Details -->
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="fname" placeholder="Ex: Niumi" required><br>
                
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Ex: Methma" required><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Ex: niumimethma@gmail.com" required><br>
                
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Ex: 0741245786" required><br>

                <label for="university_id">University ID:</label><br>
                <input type="text" id="university_id" name="university_id" placeholder="Ex: IT12345678" required><br>
            </center>
       
            <h1><div class="lseat"> Library Seating Arrangement</div></h1>
            <!-- Seating Selection via Radio Buttons -->
            <div class="seat-selection">
            <input type="radio" id="seat1-1" name="selectedSeat" value="1-1">
            <label for="seat1-1">Seat 1-1</label>

            <input type="radio" id="seat1-2" name="selectedSeat" value="1-2">
            <label for="seat1-2">Seat 1-2</label>

            <input type="radio" id="seat1-3" name="selectedSeat" value="1-3">
            <label for="seat1-3">Seat 1-3</label>

            <input type="radio" id="seat1-4" name="selectedSeat" value="1-4">
            <label for="seat1-4">Seat 1-4</label>

            <input type="radio" id="seat1-5" name="selectedSeat" value="1-5">
            <label for="seat1-5">Seat 1-5</label>

            <input type="radio" id="seat1-6" name="selectedSeat" value="1-6">
            <label for="seat1-6">Seat 1-6</label>
                <!-- Add more seats as necessary -->
            </div>

            <!-- Terms and Conditions -->
            <h3>Terms and Conditions - Discussion Rooms:</h3>
                <ol>
                    <li>Operating Hours: 9:00 a.m. to 5:00 p.m.</li>
                    <li>Booking Duration: Each booking allows a maximum duration of 2 hours, and one group can reserve only 2 time slots per day.</li>
                    <li>Time Slots:
                        <ul>
                            <li>9:00 a.m – 11:00 a.m</li>
                            <li>11:00 a.m – 1:00 p.m</li>
                            <li>1:00 p.m – 3:00 p.m</li>
                            <li>3:00 p.m – 5:00 p.m</li>
                        </ul>
                    </li>
                    <li>Minimum Occupancy: Bookings require a minimum of 5-8 students to be valid.</li>
                    <li>Behavior Expectations: Maintain respectful, quiet, and considerate behavior while inside the room and use the space only for study purposes.</li>
                    <li>Access Control: Do not allow other students to enter the room you have reserved.</li>
                    <li>Food & beverage items are not allowed within the room except water.</li>
                    <li>Responsibility and Damages: You are accountable for the room during your booking period. Any damage to the property will result in a penalty.</li>
                    <li>Your booking will be cancelled after the first 15 minutes and no excuses to be entertained due to late arrivals.</li>
                    <li>Students should provide member details via the Library Space Reservation and the actual booking data must be same.</li>
                </ol>
                <h4>Special Note: All students are required to adhere strictly to the above rules, and any violation will empower the Library Supervision with full authority to promptly reclaim the room, if necessary.</h4>
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">I agree to the terms and conditions</label><br>
            
            <input type="submit" value="Submit">
        </div>
    </form>
</div>


    <div class="description">
        <p class="text1" id="para"> 
            The CANAK University Library is a hub of knowledge and resources catering to the academic needs of students, faculty, and researchers.
            Nestled within the university campus, it stands as a beacon of intellectual exploration and learning.
            Boasting a diverse collection of books, journals, electronic resources, and multimedia materials, the library provides comprehensive support across various disciplines ranging from humanities and social sciences to engineering and natural sciences.
            Its serene ambiance and modern facilities offer an ideal environment for study, research, and collaboration.
            With dedicated staff members committed to assisting patrons in their quests for information and knowledge, the CANAK University Library serves as an indispensable resource center fostering academic excellence and intellectual growth within the university community.
        </p>
    </div>

    <hr>

<!-- Footer Section -->
<footer>
        <div class="footer">
            <div class="col-1">
                <a href="Feedback.php">Provide Feedback</a>
                <div class="row-1">info@CANAK.lk</div>
                <div class="row-2">Copyright 2024 © CANAK. All Rights Reserved.</div>
            </div>
            <div class="col-2">
                <img src="images/QR-CODE.jpg" class="qr-code">
                <!-- Social Media Links -->
                <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                <a href="https://www.google.com" class="fa fa-google"></a>
                <a href="https://www.instagram.com" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fa fa-linkedin"></a>
            </div>
        </div>
    </footer>
</body>
</html>
