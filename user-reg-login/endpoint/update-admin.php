<?php
include ('../conn/conn.php');

try {
    // Ensure form data exists
    if (!isset($_POST['tbl_admin_id'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['username'])) {
        throw new Exception("Invalid request: Missing required fields.");
    }

    // Retrieve and sanitize inputs
    $updateAdminID = trim($_POST['tbl_admin_id']);
    $updateFirstName = trim($_POST['first_name']);
    $updateLastName = trim($_POST['last_name']);
    $updateEmail = trim($_POST['email']);
    $updateUsername = trim($_POST['username']);
    $updatePassword = trim($_POST['password'] ?? ''); // Handle unset password (if user didn't update)

    // Basic validation
    if (!filter_var($updateEmail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format.");
    }

    // Fetch current admin details
    $stmt = $conn->prepare("SELECT `username_admin`, `password_admin` FROM `tbl_admin` WHERE `tbl_admin_id` = :adminID");
    $stmt->bindParam(':adminID', $updateAdminID, PDO::PARAM_INT);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$admin) {
        throw new Exception("Admin not found.");
    }

    $hashedPassword = $admin['password_admin']; // Keep existing password
    $existingUsername = $admin['username_admin']; // Keep existing username

    // Hash new password if provided
    if (!empty($updatePassword)) {
        $hashedPassword = password_hash($updatePassword, PASSWORD_DEFAULT);
    }

    // Use new username if provided, otherwise keep the existing one
    if (empty($updateUsername)) {
        $updateUsername = $existingUsername;
    }

    // Start transaction
    $conn->beginTransaction();

    // Update admin details
    $updateStmt = $conn->prepare("
        UPDATE `tbl_admin` 
        SET `first_name_admin` = :first_name, 
            `last_name_admin` = :last_name, 
            `email_admin` = :email, 
            `username_admin` = :username, 
            `password_admin` = :password 
        WHERE `tbl_admin_id` = :adminID
    ");

    $updateStmt->bindParam(':first_name', $updateFirstName, PDO::PARAM_STR);
    $updateStmt->bindParam(':last_name', $updateLastName, PDO::PARAM_STR);
    $updateStmt->bindParam(':email', $updateEmail, PDO::PARAM_STR);
    $updateStmt->bindParam(':username', $updateUsername, PDO::PARAM_STR);
    $updateStmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $updateStmt->bindParam(':adminID', $updateAdminID, PDO::PARAM_INT);
    $updateStmt->execute();

    // Commit transaction
    $conn->commit();

    echo "<script>
    alert('Admin Updated Successfully');
    window.location.href = '../admin.php'; // Redirect to the admin page
    </script>";
} catch (Exception $e) {
    if ($conn->inTransaction()) {
        $conn->rollBack(); // Rollback on error
    }
    echo "<script>
        alert('Error: " . addslashes($e->getMessage()) . "');
        window.location.href = '../admin.php'; // Redirect back to admin page on error
    </script>";
}
?>
