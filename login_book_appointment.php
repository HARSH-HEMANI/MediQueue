<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MediQueue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/registration-login-header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/js-validation-erros.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <div class="logo">
                    <img src="img/mediq-logo.jpeg" alt="logo">
                </div>
                <div class="option">
                    <button class="btn btn-sm btn-primary mt-3" style="height: 35px; width: 80px; margin: 5px;"><a
                            href="registration.php">Register</a></button>
                </div>
                <div class="option">
                    <button class="btn btn-sm btn-primary mt-3 m-3"
                        style="height: 35px; width: 80px; margin: 5px;"><a href="index.php">Home</a></button>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="login">
            <div class="image">
                <img src="img/doctor-login1.jpg" alt="">
            </div>
            <form onsubmit="return validateForm_book_login(event)"
                action="login-book-appointment.php" id="book-loginForm"
                name="book-loginForm" method="post">

                <div class="form">
                    <div class="formdesign" id="uusername">
                        <label for="username">User ID</label>
                        <input type="text" name="username" id="username"><b><span class="formerror"></span></b>
                    </div>
                    <div class="formdesign" id="upassword">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"><b><span class="formerror"></span></b>
                    </div>
                    <div class="button">
                        <button type="submit" class=" btn btn-sm btn-primary">Login</button>
                        <a href="forgot_password.php">Forgot password?</a>
                        <a href="registration.php">New member?</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>