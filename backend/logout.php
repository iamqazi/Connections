<?php
// backend/logout.php
session_start();

// Destroy session to log out the user
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Optionally, clear cookies (if you are using them for "Remember Me")
setcookie('email', '', time() - 3600, "/");  // Expire the email cookie
setcookie('password', '', time() - 3600, "/");  // Expire the password cookie

// Redirect the user to the sign-in page
header("Location: ../signin"); // Redirect to the sign-in page in the root directory
exit;
?>
