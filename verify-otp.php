<?php
session_start();
define('SITEURL', 'http://localhost/food-order/');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entered_otp = $_POST['otp'];
    $generated_otp = $_SESSION['otp'];

            if ($entered_otp == $generated_otp) {
                    // Show success message then redirect
                     $_SESSION['user-login-verify'] = ""; 
                    echo "
                    <div style='color: green; text-align: center; font-size: 16px; margin-top:50px;'>
                        ✅ OTP Verified Successfully!<br>
                        Redirecting to Home Page...
                    </div>

                    <script>
                        setTimeout(function() {
                            window.location.href = '".SITEURL."order.php';
                        }, 2000);                                                   
                    </script>
                    ";
                    exit();
                } else {
                    // Show alert and redirect immediately
                    echo "
                    <script>
                        alert('❌ Invalid OTP! Try Again');
                        window.location.href = '".SITEURL."user-login.php';
                    </script>
                    ";
                    exit();
            }

}
?>
