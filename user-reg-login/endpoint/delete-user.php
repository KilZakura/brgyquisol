<?php
include ('../conn/conn.php');

if (isset($_GET['user'])) {
    $user = $_GET['user'];

    try {
        $query = "DELETE FROM `tbl_user` WHERE `tbl_user_id` = :user";  
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':user', $user, PDO::PARAM_INT);

        $query_execute = $stmt->execute();

        if ($query_execute) {
            // Check the referring page
            $referer = $_SERVER['HTTP_REFERER'];

            // Redirect logic based on the referrer
            if (strpos($referer, 'admin_user_content.php') !== false) {
                // If delete request came from admin_user_content.php, stay on that page
                echo "
                <script>
                    alert('User Deleted Successfully');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/admin_user_content.php';
                </script>
                ";
            } elseif (strpos($referer, 'admin.php') !== false) {
                echo "
                <script>
                    alert('User Deleted Successfully');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/admin.php';
                </script>
                ";
            } elseif (strpos($referer, 'home.php') !== false) {
                echo "
                <script>
                    alert('User Deleted Successfully');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/home.php';
                </script>
                ";
            } else {
                // Default redirect
                echo "
                <script>
                    alert('User Deleted Successfully');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/home.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
                alert('Failed to Delete User');
                window.location.href = 'http://localhost/software_engineering/user-reg-login/home.php';
            </script>
            ";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
