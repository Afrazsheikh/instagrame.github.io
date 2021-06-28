<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Instagram | Log in or Sign up</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="heading"></div>
            <form action="login.php" method="POST">
                <div class="field">
                    <input type="text" id="username " class="form-control" name="username" placeholder="Phone number, username, or text"/>
                    <label for="username">Phone number, username, or email</label>
                </div>
                <div class="field">
                    <input id="password" type="password" placeholder="password" name="password" />
                    <label for="password">Password</label>
                </div>

                <button class="login-button" title="login">Log In</button>
                <div class="separator">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="other">
                    <button class="fb-login-btn" type="button">
                        <i class="fa fa-facebook-official fb-icon"></i>
                        <span class="">Log in with Facebook</span>
                    </button>
                    <a class="forgot-password" href="#">Forgot password?</a>
                </div>
            </form>
        </div>
        <div class="box">
            <p>Don't have an account? <a class="signup" href="#">Sign Up</a></p>
        </div>
    </div>

</body>

</html>