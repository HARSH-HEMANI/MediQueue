<?php
// User credentials
$userType = $_POST['user'];
$username = $_POST['username'];
$password = $_POST['password'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MediQueue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <header>
        <nav>
            <ul>
                <div class="logo">
                    <img src="./img/mediq-logo.jpeg" alt="logo">
                </div>
                <div class="option">
                    <!------ Registration Button -->
                    <button class="btn btn-sm btn-primary mt-3" style="height: 35px; width: 80px; margin: 5px;"><a href="registration.php">Register</a>
                    </button>
                </div>

                <!------ Home Button -->
                <div class="option">
                    <button class="btn btn-sm btn-primary mt-3 m-3" style="height: 35px; width: 80px; margin: 5px;"><a href="index.html">Home</a></button>
                </div>
            </ul>
        </nav>
    </header>

    <main>
        <div class="login">
            <div class="image">
                <img src="./img/doctor-login1.jpg" alt="">
            </div>

            <!------------------ Form starts ------------------------>
            <form action="login.php" name="loginForm" id="loginForm" method="post">
                <div class="form">
                    <div class="formdesign" id="select">
                        <label for="dropdown-menu">
                            <!------- user selection ------>
                            <select name="user" id="dropdown-menu">
                                <option value="#">Select</option>
                                <option name="user" value="patient,html">User</option>
                                <option name="user" value="doctor.html">Doctor</option>
                                <option name="user" value="admin.html">Admin</option>
                            </select>
                        </label>

                        <div class="formdesign" id="uusername">
                            <label for="username">User ID</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="formdesign" id="upassword">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>

                        <div class="button">
                            <button type="submit" class="btn btn-sm btn-primary">Login</button>
                            <a href="forgot-password.php">Forgot password?</a>
                            <a href="registration.php">New Member?</a>
                        </div>
                    </div>
                </div>
            </form>
            <!------- form ends ------>
        </div>
    </main>

    <script src=""></script>
</body>

</html>