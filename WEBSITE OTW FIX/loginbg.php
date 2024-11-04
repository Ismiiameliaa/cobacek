<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="imagebg.css">
</head>
<body>
    <div class="contbg">
        <div class="imagebg">
            <div class="text-sci">
                <h2>Welcome To Our Website.</h2>
                <p>Thank you for coming. Hopefully you like our hospitality.</p>
            </div>

            <div class="logreg-box">
                <div class="form-box1">
                    <form action="#">
                        <h2>Log in</h2>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="remember-forgot">
                            <label>
                                <input type="checkbox">Remember Me
                            </label>
                            <a href="#">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn">Login</button>
                        <div class="login-register">
                            <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
    </div>
        

        <!-- <div class="formsignup">
        <form action="">
            <h1>Sign up</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">I agree to the terms & conditions</label>
            </div>
            <button type="submit" class="btn">Sign up</button>
            <div class="register-link">
                <p>Already have an account? <a href="#">Sign In</a></p>
            </div>
        </form>
        </div> -->
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html