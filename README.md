<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="New.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body background="class.jpg" style="background-repeat: no-repeat;background-size: cover;">
        <div class="wrapper" style="border:10px">
            <form action="student_db.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="name" >
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="pass">
                    <i class='bx bxs-lock'></i>
                </div>
                <div>
                    <button type="submit" value="Login" class="btn">Login</button>
                </div>
                <div id="forgot-pass">
                    <a href="forgot_pass.html">Forgot Password</a>
                </div>
                <div id="forgot-pass">
                    Not registered? 
                    <a href="Register.html">Register now</a>
                </div>
            </form>
        </div>
    </body>
</html>
