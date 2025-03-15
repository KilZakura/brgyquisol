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
    
<div class="container mt-3 rounded shadow p-4">
  <h2>Register</h2>
  <form action="/action_page.php">
  
                        <!-- firstname/ middlename/ lastName -->
  <div class="mb-3 mt-3">
      <label for="firstName">First name:</label>
      <input type="firstName" class="form-control" id="firstName" placeholder="first name" name="firstName">
    </div>


    <div class="mb-3 mt-3">
      <label for="middleName">Middle name:</label>
      <input type="middleName" class="form-control" id="middleName" placeholder="middle name" name="middleName">
    </div>


    <div class="mb-3 mt-3">
      <label for="lastName">Last name:</label>
      <input type="lastName" class="form-control" id="lastName" placeholder="lastName" name="lastName">
    </div>
                            <!-- --- -->

  <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


</body>
</html>