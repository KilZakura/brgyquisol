<?php include ('../conn/conn.php'); ?>
<?php include ('user-header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (optional for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Custom Style CSS -->
<link rel="stylesheet" href="../assets/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ss</title>
</head>

<body class="bg-light">

    <!-- Main Content Area -->
    <div class="container-fluid" style="margin-left: 10px;"> <!-- Adjust margin to fit sidebar -->
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <h1 class="mt-4">Welcome!</h1> 

                <form action="submit.php" method="POST" class="p-3 bg-white shadow rounded">
    <div class="mb-3">
        <label for="fullname" class="form-label">Full Name:</label>
        <input type="text" class="form-control" id="fullname" name="fullname" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Gender:</label>
        <select class="form-select" name="gender" required>
            <option value="" selected disabled>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="purok" class="form-label">Purok:</label>
        <input type="text" class="form-control" id="purok" name="purok" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Civil Status:</label>
        <select class="form-select" name="civil_status" required>
            <option value="" selected disabled>Select Status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Divorced">Divorced</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="requester_fullname" class="form-label">Full Name (Requester):</label>
        <input type="text" class="form-control" id="requester_fullname" name="requester_fullname" required>
    </div>

    <div class="mb-3">
        <label class="form-label d-block">Request Type:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="request_type" id="barangay_clearance" value="Barangay Clearance" required>
            <label class="form-check-label" for="barangay_clearance">
                Barangay Clearance
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="request_type" id="form2" value="Form 2">
            <label class="form-check-label" for="form2">
                Form 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="request_type" id="form3" value="Form 3">
            <label class="form-check-label" for="form3">
                Form 3
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit Request</button>
</form>

            </main>
        </div>
    </div>



    <?php include('user-footer.php'); ?> <!-- Include footer if needed -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
