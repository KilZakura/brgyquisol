<?php
include ('../conn/conn.php');

try {
    // Ensure form data exists, including contact number
    if (!isset($_POST['tbl_user_id'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['username'], $_POST['contact_number'])) {
        throw new Exception("Invalid request: Missing required fields.");
    }

    // Retrieve and sanitize inputs
    $updateUserID = trim($_POST['tbl_user_id']);
    $updateFirstName = trim($_POST['first_name']);
    $updateLastName = trim($_POST['last_name']);
    $updateEmail = trim($_POST['email']);
    $updateUsername = trim($_POST['username']);
    $updateContactNumber = trim($_POST['contact_number']);  // Add contact number
    $updatePassword = trim($_POST['password'] ?? ''); // Handle unset password (if user didn't update)

    // Basic validation
    if (!filter_var($updateEmail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format.");
    }

    // Fetch current user details
    $stmt = $conn->prepare("SELECT `username`, `password` FROM `tbl_user` WHERE `tbl_user_id` = :userID");
    $stmt->bindParam(':userID', $updateUserID, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        throw new Exception("User not found.");
    }

    $hashedPassword = $user['password']; // Keep existing password if no new password is provided
    $existingUsername = $user['username']; // Keep existing username if no new username is provided

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

    // Update user details, with contact number before username
    $updateStmt = $conn->prepare("
        UPDATE `tbl_user` 
        SET `first_name` = :first_name, 
            `last_name` = :last_name, 
            `email` = :email, 
            `contact_number` = :contact_number,  -- Put contact number before username
            `username` = :username, 
            `password` = :password
        WHERE `tbl_user_id` = :userID
    ");

    // Bind parameters
    $updateStmt->bindParam(':first_name', $updateFirstName, PDO::PARAM_STR);
    $updateStmt->bindParam(':last_name', $updateLastName, PDO::PARAM_STR);
    $updateStmt->bindParam(':email', $updateEmail, PDO::PARAM_STR);
    $updateStmt->bindParam(':contact_number', $updateContactNumber, PDO::PARAM_STR);  // Bind contact number before username
    $updateStmt->bindParam(':username', $updateUsername, PDO::PARAM_STR);
    $updateStmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $updateStmt->bindParam(':userID', $updateUserID, PDO::PARAM_INT);

    // Execute the query
    $updateStmt->execute();

    // Commit transaction
    $conn->commit();

    echo "<script>
    alert('User Updated Successfully');
    window.location.href = '../home.php'; // Redirect to the home page
    </script>";

} catch (Exception $e) {
    if ($conn->inTransaction()) {
        $conn->rollBack(); // Rollback on error
    }
    echo "<script>
        alert('Error: " . addslashes($e->getMessage()) . "');
        window.location.href = '../home.php'; // Redirect back to home page on error
    </script>";
}
?>
