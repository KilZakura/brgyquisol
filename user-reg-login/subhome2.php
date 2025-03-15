<?php include ('./conn/conn.php'); ?>

<?php include('header.php'); ?> <!-- Include header.php which contains the navbar and sidebar -->

<!DOCTYPE html>
<html lang="en">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (optional for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Custom Style CSS -->
<link rel="stylesheet" href="./assets/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Home 2</title>
</head>

<body class="bg-light">

    <!-- Main Content Area -->
    <div class="container-fluid" style="margin-left: 250px;"> <!-- Adjust margin to fit sidebar -->
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <h1 class="mt-4">Welcome Admin</h1>
                <p>subhome2.php</p>
            </main>
        </div>
    </div>

    <?php include('footer.php'); ?> <!-- Include footer if needed -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
