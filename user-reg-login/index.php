<?php include ('./conn/conn.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration and Login System</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>                                                    

<body class="bg-image" style="background-image: url('images/bg1.jpg'); background-size: cover; background-position: center; height: 100vh; margin: 0;">


<?php
if (isset($_SESSION['error'])) {
    echo "<div style='color: red; text-align: center; margin-bottom: 10px;'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']); // Clear error after displaying
}
?>

<div>
    <h1 class="mt-5 mb-5"> 
        
    </h1>
</div>

        <!-- MAIN -->
    <div class="main">

        <!-- Login Area -->
        <div class="login bg-white p-4 rounded shadow" id="loginForm">
                <div class="d-flex align-items-center mb-3">               
                            <img src="images/brgy-quisol.jpg" alt="Logo" class="mr-3" style="width: 80px; height: 80px;">
                            <p class="mb-0 fs-6">BARANGAY QUISOL, DANAO CITY, CEBU</p>

                 </div>
                 <h1 class="text-center mb-0">Log in</h1>   
            <div class="login-form">
                        <!-- USERNAME -->
                <!-- <form action="./endpoint/login.php" method="POST">
                    <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <p class="registrationForm" onclick="showRegistrationForm()">No Account? Register Here.</p>
                    <button type="submit" class="btn btn-dark login-btn form-control">Login</button>
                </form> -->
                        <!-- karaan -->

                <form action="./endpoint/login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

                    <p class="registrationForm" onclick="showRegistrationForm()">No Account? Register Here.</p>

                    <!-- Google reCAPTCHA Widget -->
                <div class="g-recaptcha" data-sitekey="6LfDm_gqAAAAALUh8eclwjpKT-BBX_1gmGxMy_CX"></div>
                 
                    <button type="submit" class="btn btn-dark login-btn form-control">Login</button>
                    
                </form>

            </div>
        </div>

        <!-- Registration Area -->
        <div class="registration bg-white" id="registrationForm">
                    <img src="images/brgy-quisol.jpg" alt="Logo" class="mr-3" style="width: 60px; height: 60px;">
                    <p class="mb-0 smaller-text">BARANGAY QUISOL, DANAO CITY, CEBU</p>
                        <h1 class="text-center">Registration Form</h1>
            <div class="registration-form">
                <form action="./endpoint/add-user.php" method="POST">
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="firstName">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" required>
                        </div>
                        <div class="col-6">
                            <label for="lastName">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-5">
                            <label for="contactNumber">Contact Number:</label>
                            <input type="tel" class="form-control" id="contactNumber" name="contact_number" maxlength="11" required>
                        </div>
                        <div class="col-7">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registerUsername">Username:</label>
                        <input type="text" class="form-control" id="registerUsername" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password:</label>
                        <input type="password" class="form-control" id="registerPassword" name="password" required>
                    </div>
                    <p class="registrationForm" onclick="showLoginForm()"><- Back</p>
                    <button type="submit" class="btn btn-dark login-register form-control">Register</button>
                </form>
            </div>
        </div>

    </div>

    <script>
        // Constant variables
        const loginForm = document.getElementById('loginForm');
        const registrationForm = document.getElementById('registrationForm');

        // Hide registration form
        registrationForm.style.display = "none";

        function showRegistrationForm() {
            registrationForm.style.display = "";
            loginForm.style.display = "none";
        }

        function showLoginForm() {
            registrationForm.style.display = "none";
            loginForm.style.display = "";
        }
    </script>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


    <!-- Google reCAPTCHA API -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div> 
    <h1>

    </h1>

    <h1>
        
    </h1>
</div>
    <!-- Load reCAPTCHA Script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div>
    <h1 class="mt-5 mb-5"> <!-- mt = margin-top, mb = margin-bottom -->
        
    </h1>
</div>

</body>
</html>
