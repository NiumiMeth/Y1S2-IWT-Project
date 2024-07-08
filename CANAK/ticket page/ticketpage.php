<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Help Desk</title>
  <link rel="stylesheet" href="../ticket page/ticketpage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class = "nav">
		<div class = "icon">CANAK UNIVERSITY</div>		
		<ul>
			<li><a href="../home.php">Home</a></li>
			<li><a href="../PROJECT/StdntS.php">Services</a></li>
			<li><a href="../ticket page/faq.php">FAQs</a></li>
			<li><a href="../ticket page/maps.php">Map</a></li>
		</ul>
    <div class = "space">
    </div>
  <ul>
    <li class = "Profile"><a href="User Account.php"></a></li>
  </ul>
  </div>



  <div class="container">
    <div class="tabs">
      <button class="tablinks" onclick="openTab(event, 'newTicket')">Open a New Ticket</button>
      <button class="tablinks" onclick="openTab(event, 'checkStatus')">Check Ticket Status</button>
    </div>
    
    <div id="newTicket" class="tabcontent">
      <h2>Open a New Ticket</h2>
      <h4>please fillout the form and representative will get back to you via email </h4>

   <form method="POST" action="ticketinsert.php">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="uname" required><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br>

  <label for="registration_number">Registration Number:</label><br>
  <input type="text" id="registration_number" name="rnumber" required><br>

  <label for="faculty">Faculty:</label><br>
  <select id="faculty" name="fac" required>
    <option value="">Select</option>
    <option value="computing">Computing</option>
    <option value="engineering">Engineering</option>
    <option value="business">Business</option>
  </select><br>

  <label for="contact_number">Contact Number:</label><br>
  <input type="text" id="contact_number" name="cnumber" required><br>

  <label for="message">Message:</label><br>
  <textarea id="message" name="msg" rows="4" cols="50" required></textarea><br><br>

  <button type="submit">Submit</button>
</form>

     



    </div>
    
    
    
    <div id="checkStatus" class="tabcontent">
    <h2>Check Ticket Status</h2>

    <form id="checkTicketForm">
        <label for="registrationNumber">Registration Number:</label>
        <input type="text" id="registrationNumber" name="registrationNumber" required>

        <button type="submit">Submit</button>
    </form>

    <div id="ticketDetails"></div>

    <script>
        document.getElementById('checkTicketForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the registration number entered by the user
            var registrationNumber = document.getElementById('registrationNumber').value;

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure the request
            xhr.open('POST', 'check_ticket_status.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Set up the callback function
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Display the ticket details in the 'ticketDetails' div
                        document.getElementById('ticketDetails').innerHTML = xhr.responseText;
                    } else {
                        // Handle errors
                        console.error('Error:', xhr.status);
                    }
                }
            };

            // Send the request with the registration number as data
            xhr.send('registrationNumber=' + encodeURIComponent(registrationNumber));
        });
    </script>
</div>


  </div>

  <script src="script.js"></script>

  <div class = "footer">
				<div class = "col-1">
				<a href ="Feedback.php">Provide Feedback</a>
				<div class = "row-1">
				info@CANAK.lk
				</div>
				<div class = "row-2">
				Copyright 2024 © CANAK. All Rights Reserved.
				</div>
				</div>
				<div class = "col-2">
					<div class = "imgarea">
					<img src = "images/qr-code.WEBP" div class = "qr-code">
					</div>
					<a href="facebook.com" class="fa fa-facebook"></a>
					<a href="twitter.com" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="instagram.com" class="fa fa-instagram"></a>
					<a href="linkedin.com" class="fa fa-linkedin"></a>
				</div>
			</div>
		</div>
	</body>
</html>