<?php
// Include the database connection
require 'config.php';

// Check if registration number is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrationNumber'])) {
    $registrationNumber = $_POST['registrationNumber'];

    // Query to fetch ticket details based on registration number
    $sql = "SELECT * FROM ticket WHERE RegistrationNumber = '$registrationNumber'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Ticket details found, display them
        while ($row = $result->fetch_assoc()) {
            echo "<h3>Ticket Details:</h3>";
            echo "<p>Username: " . $row['Username'] . "</p>";
            echo "<p>Email: " . $row['Email'] . "</p>";
            echo "<p>Registration Number: " . $row['RegistrationNumber'] . "</p>";
            echo "<p>Faculty: " . $row['Faculty'] . "</p>";
            echo "<p>Contact Number: " . $row['ContactNumber'] . "</p>";
            echo "<p>Message: " . $row['Message'] . "</p>";
            // Provide an update button
           
        }
    } else {
        echo "No ticket found with the provided registration number.";
    }
} else {
    echo "Error: Registration number not provided.";
}

?>
<form method="POST" action="update.php">
    <h3>Update Ticket Details:</h3>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="Username" required><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="Email" required><br>

  <label for="registration_number">Registration Number:(must be same as old)</label><br>
  <input type="text" id="registration_number" name="RegistrationNumber" required><br>

  <label for="faculty">Faculty:</label><br>
  <select id="faculty" name="Faculty" required>
    <option value="">Select</option>
    <option value="computing">Computing</option>
    <option value="engineering">Engineering</option>
    <option value="business">Business</option>
  </select><br>

  <label for="contact_number">Contact Number:</label><br>
  <input type="text" id="contact_number" name="ContactNumber" required><br>

  <label for="message">Message:</label><br>
  <textarea id="message" name="Message" rows="4" cols="50" required></textarea><br><br>
  <button type='submit' value='update'>Update Ticket</button>
 
</form><br>


<form method="POST" action="ticketDelete.php">
    <h3>Delete Ticket Details:</h3>

  <label for="registration_number">Registration Number:(must be same as old)</label><br>
  <input type="text" id="registration_number" name="RegistrationNumber" required><br>

 
  <button type='submit' value='update'>delete</button>



</form>