<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
    <img src="images/brgy-quisol.jpg" alt="Logo" class="" style="width: 80px; height: 80px;">
        <a class="navbar-brand ml-5" href="home.php">Barangay Quisol: Document Request System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
</nav>

            <!-- Registration Area -->         
            <div class="registration bg-white" id="registrationForm">
                    <p class="mb-0 smaller-text">---</p>
                        <h1 class="text-center">--</h1>
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
                                        <!-- x -->
                    <div class="">
                            <label for="email">Purok:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                                            <!-- x -->

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
                                                <!-- x -->
            </div>
        </div>


      <!-- Bootstrap Js -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


    
</body>
</html>