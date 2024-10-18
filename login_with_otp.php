<?php
if (isset($_POST['submit'])) {
    $mobileOrEmail = $_POST['prajaktagarodi@gmail.com_or_9561234096'];
    $otp = rand(100000, 999999); // Generate a 6-digit OTP

    // Store the OTP in session or database
    session_start();
    $_SESSION['otp'] = $otp;
    
    // Send OTP via email or SMS (example using PHPMailer for email)
    $subject = "Your OTP Code";
    $message = "Your OTP is: $otp";
    mail($email_or_mobaile, $subject, $message); // Simple mail function

    echo "OTP sent to $prajaktagarodi@gmail.com_or_9561234096.";
}
?>
<form method="POST" action="">
    <input type="text" name="prajaktagarodi@gmail.com or 9561234096" placeholder="Enter mobile or email" required />
    <input type="submit" name="submit" value="Send OTP" />
</form>

<?php
session_start();
if (isset($_POST['verify_otp'])) {
    $enteredOtp = $_POST['otp'];
    
    if ($enteredOtp == $_SESSION['otp']) {
        echo "OTP verified! You are logged in.";
        // Redirect or handle successful login
    } else {
        echo "Invalid OTP. Please try again.";
    }
}
?>
<form method="POST" action="">
    <input type="text" name="otp" placeholder="Enter OTP" required />
    <input type="submit" name="verify_otp" value="Verify OTP" />
</form>
