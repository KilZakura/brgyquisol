<?php include ('./conn/conn.php'); ?>
<?php include('header.php'); ?> <!-- Include header.php which contains the navbar and sidebar -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Home 1</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (optional for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="bg-light">

    <!-- Main Content Area -->
    <div class="container-fluid"> <!-- Adjust margin to fit sidebar -->
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <h1 class="mt-4">Welcome Admin</h1>
                <p>subhome1.php</p>
          
                <form method="POST" action="generate-cert/generate_word.php">

    <label for="fullname">Full Name: </label>
    <input type="text" name="fullname" id="fullname" placeholder="Enter your full name" required><br>

    <label for="purok">Purok:</label>
    <input type="text" name="purok" id="purok" placeholder="Enter your purok" required><br>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female<br>

    <label for="civil_status">Civil Status:</label>
    <input type="radio" name="civil_status" value="Single" required> Single
    <input type="radio" name="civil_status" value="Married" required> Married
    <input type="radio" name="civil_status" value="Widowed" required> Widowed<br>

    <label for="fullname_requester">Full Name of Requester:</label>
    <input type="text" name="fullname_requester" id="fullname_requester" placeholder="Enter requester's full name" required><br>

    <label for="purpose">Purpose:</label><br>
<input type="radio" name="purpose" value="Employment" required> Employment
<input type="radio" name="purpose" value="Police Clearance" required> Police Clearance
<input type="radio" name="purpose" value="Local" required> Local
<input type="radio" name="purpose" value="Loan" required> Loan
<input type="radio" name="purpose" value="Abroad" required> Abroad
<input type="radio" name="purpose" value="Others" required> Others Legal Purpose



    <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </main>
        </div>
    </div>

    <?php include('footer.php'); ?> <!-- Include footer if needed -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
