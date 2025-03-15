<title>header</title>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (optional for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Custom Style CSS -->
<link rel="stylesheet" href="./assets/style.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Logo aligned to the left -->
        <img src="images/logo.png" alt="Logo" style="width: 69px; height: 69px;">
        <a class="navbar-brand ms-3" href="admin.php">Barangay Quisol: Document Request System</a>

        <!-- Collapsible button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="navbar-brand" href="#admin">User</a>  
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Sidebar -->
<div id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark text-white p-3 position-fixed h-100">
    <h4 class="mb-2">Interface</h4>
    <ul class="nav flex-column">
        <!-- Home Section (Collapsible) -->
        <li class="nav-item">
            <a class="nav-link text-white" href="#homeSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="homeSubmenu">
                <i class="fas fa-home"></i> Home
            </a>
            <div id="homeSubmenu" class="collapse">
                <ul class="nav flex-column pl-3 submenu">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="request-form.php">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="subhome2.php#">Requests</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Account Section (Collapsible) -->
<li class="nav-item">
    <a class="nav-link text-white" href="#accountSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="accountSubmenu">
        <i class="fas fa-user"></i> Account
    </a>
    <div id="accountSubmenu" class="collapse">
        <ul class="nav flex-column pl-3 submenu">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </a>
            </li>
        </ul>
    </div>
</li>
</div> 
<!-- end sa sidebar -->


<!-- Main Content Area (adjusted for sidebar) -->
<div class="container-fluid" style="margin-left: 250px; padding-top: 20px;">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <!-- Main content goes here -->
        </main>
    </div>
</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery Script for collapsing behavior -->
<script>
    $(document).ready(function () {
        $('#sidebar a[data-bs-toggle="collapse"]').on('click', function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            
            var target = $(this).attr('href'); // Get target ID (e.g., "#homeSubmenu")
            var targetElement = $(target); // Find the collapsible element by ID
            
            // If the clicked menu is already open, let Bootstrap handle collapsing it
            if (targetElement.hasClass('show')) {
                targetElement.collapse('toggle'); // Toggle collapse
            } else {
                // First, close any currently open menu
                $('#sidebar .collapse.show').collapse('hide');
                // Then open the clicked menu
                targetElement.collapse('show');
            }
        });
    });
</script>


<style>
    /* Prevent sidebar from covering navbar */
    body {
        padding-top: 80px; /* To create space for the navbar */
    }

    /* Adjust layout for large screens */
    @media (min-width: 992px) {
        #sidebar {
            margin-top: 80px; /* Make the sidebar start below the navbar */
        }
        .container-fluid {
            margin-left: 250px; /* Ensure space for the sidebar */
        }
    }

    /* Ensure the content doesn't go under the sidebar on smaller screens */
    @media (max-width: 991px) {
        .container-fluid {
            margin-left: 0; /* Make the content use the full screen width */
        }
    }
</style>
