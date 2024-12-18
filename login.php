
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoChan Schedule</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="login-box">
        <form action="index.php" method="POST">
            <h2>Login</h2>
            <h3>Nama</h3>
                <div class="userN-input">
                    <input type="text" placeholder="username" name="username"/>
                </div>
                <div class="userN-input">
                    <h3>Password</h3>
                    <input type="password" placeholder="password" name="password"/>
                </div>
                <br>
                <div class="keep-loggedin">
                    <input type="checkbox">Remember me 
                </div>
                <button type="submit" name="login">Login</button>
                <br>
                <div class="help">
                    Don't Have Any Account?
                    <a href="register.php">Register</a>
                </div>
        </form>
    </div>
</body>
</html>