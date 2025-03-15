<?php include ('./conn/conn.php'); ?>
<?php include('header.php'); ?> <!-- Include header.php which contains the navbar and sidebar -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

 
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (optional for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Custom Style CSS -->
<link rel="stylesheet" href="./assets/style.css">


</head>

<body class="bg-light">

    <!-- Main Content Area Inside container-fluid -->
    <div class="container-fluid" style="margin-left: 250px; padding-top: 20px;"> <!-- Ensure proper space for sidebar -->
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <!-- Admin Page Content -->
                <h1 class="mt-4">Main</h1>
                <p>..............</p>
                <!-- You can add additional content here, such as admin-specific features -->
            </main>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>
    <!-- End of Footer -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript functions for any dynamic behavior can be added here if necessary
    </script>
</body>
</html>
