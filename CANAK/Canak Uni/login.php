<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="container">
        <h1>Sign in</h1>
        <form method="post" action="insert.php">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" >
                <a href="#" class="forgot-password">Forgot Password</a>
            </div>
            <button type="submit" name="submit" class="btn">Sign in</button>
            <?php if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyinputs') {
                    echo '<div class="error"> Fill the all fields!! </div>';
                }else if ($_GET['error'] == 'invalidusername') {
                    echo '<div class="error"> Invalid username, login with email or create a account </div>';
                }else if ($_GET['error'] == 'invalidpassword') {
                    echo '<div class="error"> Invalid Password! </div>';
                }
            } ?>
        </form>
        <div class="or-separator">OR</div>
        <button class="canak-login-btn">Login with CANAK Email Account</button>
    </div>
</body>
</html>