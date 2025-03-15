<?php
session_start();
include('../conn/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Check if the username is "admin"
        if ($username == "admin") {
            // Directly log in as an admin without password check
            $stmt_admin = $conn->prepare("SELECT `tbl_admin_id`, `password_admin` FROM `tbl_admin` WHERE `username_admin` = :username");
            $stmt_admin->bindParam(':username', $username);
            $stmt_admin->execute();
            $admin = $stmt_admin->fetch(PDO::FETCH_ASSOC);

            if ($admin) {
                $_SESSION['tbl_admin_id'] = $admin['tbl_admin_id'];
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "admin";

                echo "
                <script>
                    alert('Login Successful as Admin!');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/admin.php';
                </script>
                ";
                exit;
            } else {
                echo "
                <script>
                    alert('Login Failed, Admin Not Found!');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/index.php';
                </script>
                ";
                exit;
            }
        }

        // 🟢 CHECK IN tbl_user FOR NON-ADMIN USERS
        $stmt_user = $conn->prepare("SELECT `tbl_user_id`, `password` FROM `tbl_user` WHERE `username` = :username");
        $stmt_user->bindParam(':username', $username);
        $stmt_user->execute();
        $user = $stmt_user->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $stored_password_user = $user['password'];

            // Verify hashed password for regular users
            if (password_verify($password, $stored_password_user)) {
                $_SESSION['user_id'] = $user['tbl_user_id'];
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "user";

                echo "
                <script>
                    alert('Login Successful!');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/home.php';
                </script>
                ";
                exit;
            } else {
                echo "
                <script>
                    alert('Login Failed, Incorrect Password!');
                    window.location.href = 'http://localhost/software_engineering/user-reg-login/index.php';
                </script>
                ";
                exit;
            }
        }

        // 🔴 IF USER NOT FOUND IN BOTH TABLES
        echo "
        <script>
            alert('Login Failed, User Not Found!');
            window.location.href = 'http://localhost/software_engineering/user-reg-login/index.php';
        </script>
        ";
        exit;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
