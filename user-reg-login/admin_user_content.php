
<?php include ('./conn/conn.php'); ?>

<?php include('header.php'); ?> <!-- Include header.php which contains the navbar and sidebar -->

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (optional for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Custom Style CSS -->
<link rel="stylesheet" href="./assets/style.css">

<!-- dashboard_content.php -->
<div class="container-fluid">
    <div class="row">
    
        <!-- Main Content Area -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <!-- Admin Dashboard -->
            <?php include('admin_dashboard.php'); ?>

            <!-- Users Dashboard -->
            <?php include('user_dashboard.php'); ?>

        </main>
    </div>
</div>

<?php include('admin_modal.php'); ?> <!-- Include modal for admin update/delete -->
<?php include('user_modal.php'); ?> <!-- Include modal for admin update/delete -->

<?php include('footer.php'); ?> <!-- Include footer if needed -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
