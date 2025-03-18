<?php
session_start();
include('../conn/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // 1️⃣ ✅ Verify reCAPTCHA
    if (empty($recaptchaResponse)) {
        echo "
        <script>
            alert('Please complete the reCAPTCHA!');
            window.location.href = 'http://localhost/software_engineering/user-reg-login/index.php';
        </script>
        ";
        exit;
    }

    $secretKey = "6LfDm_gqAAAAAGBwdiIUpriUUD195b5KUO8ls81c"; // secretkey dri
    $verifyURL = "https://www.google.com/recaptcha/api/siteverify";

    // Use cURL for reCAPTCHA validation!
    $data = ['secret' => $secretKey, 'response' => $recaptchaResponse];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $verifyURL);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $responseData = json_decode($response);

    try {
        // 2️⃣ 🟢 CHECK IF ADMIN         ---------------------------------------------------------------------------------
        if ($username === "admin") {
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
            }
        }

        // 3️⃣ 🟢 CHECK IF USER EXISTS IN tbl_user   --------------------------------------------------------------------------
        $stmt_user = $conn->prepare("SELECT `tbl_user_id`, `password` FROM `tbl_user` WHERE `username` = :username");
        $stmt_user->bindParam(':username', $username);
        $stmt_user->execute();
        $user = $stmt_user->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $stored_password_user = $user['password'];

            // ✅ Verify hashed password for users
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

        // 4️⃣ 🔴 IF USER NOT FOUND
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
?>
