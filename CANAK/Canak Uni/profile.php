<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

$id = $_SESSION['id'];
$email = $_SESSION['email'];


$con=new mysqli("localhost","root","","canak");

if($con->connect_error)
{
    die("connection failed".$con->connect_error);
} 

//get details from database
$sql = mysqli_query($con,"SELECT * FROM register_std WHERE id = '$id' AND Email = '$email';");
$row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Site Title</title>
    <link rel="stylesheet" href="profile.css">
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

            <a href="../Canak Uni/logout.php">
                
                <button id="logout"> LOG OUT</button>
              
            </a>
		
		</div>
    <div class="container">
        <div class="account">
            <h1>Your Profile Information</h1>
            <div class="info">
                <form action="profile.inc.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" value="<?php echo htmlspecialchars($row['Fname'] ?? ''); ?>">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" value="<?php echo htmlspecialchars($row['Lname'] ?? ''); ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?php echo htmlspecialchars($row['Email'] ?? ''); ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="uname" value="<?php echo htmlspecialchars($row['Username'] ?? ''); ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" value="<?php echo htmlspecialchars($row['Phone'] ?? ''); ?>">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender">
                                <option value="male" <?php if(isset($row['Gender']) && $row['Gender'] === 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if(isset($row['Gender']) && $row['Gender'] === 'female') echo 'selected'; ?>>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="profile-btn">
                        <button name="delete" class="delete-btn">Delete profile</button>
                        <button name="cancel" class="cancel-btn">Cancel</button>
                        <button name="update" class="update-btn">Update</button>
                    </div>
                </form>
            </div>
            <div class="login-info">
                <h2 id="login-info-header">Your login Information</h2>
                <form action="profile.inc.php" method="POST">
                    <div class="form-group-login">
                        <input type="email" value="<?php echo htmlspecialchars($row['Email'] ?? ''); ?>" name="email" readonly>
                    </div>
                    <div class="form-group-login">
                        <input type="password" placeholder="New Password" name="newpassword">
                    </div>
                    <div class="form-group-login">
                        <input type="password" placeholder="Re Enter New Password" name="renewpassword">
                    </div>
                    <button type="submit" name="updatelogin" class="update-btn">Update</button>
                </form>
            </div>
        </div>
    </div>


    
    <script src="script.js"></script>
</body>
</html>
