<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Registration Form</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <div class="registration-container">
        <h1>Register Here</h1>
        <form action="register.inc.php" method="post">
            <div class="form-row">
                <div class="form-column">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="firstname" placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" id="email" name="email" placeholder="Enter Your E-Mail">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter Your Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="lastname" placeholder="Enter Your Last Name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio-group">
                            <div>
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Re-Enter Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Re-Enter Your Password">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <div class="agreement">
                        <input type="checkbox" id="agreement" name="agreement" value="agree">
                        <label for="agreement">Privacy and Policy/Agreement</label>
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <button type="submit" name="submit" class="register-btn" >Register Now</button>
            </div>
            <?php if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyinputs') {
                    echo '<div class="error"> Fill the all fields!! </div>';
                }else if ($_GET['error'] == 'unmatchpassword') {
                    echo '<div class="error"> Passwords are not matched </div>';
                }else if ($_GET['error'] == 'useraccountexist') {
                    echo '<div class="error"> This email already registered. Please login! </div>';
                }else if ($_GET['error'] == 'usernameexist') {
                    echo '<div class="error"> This username already exist. Please try another one! </div>';
                }else if ($_GET['error'] == 'agreement') {
                    echo '<div class="error"> Please agree to the our policies.</div>';
                }
            } ?>
        </form> 
    </div>
</body>
</html>