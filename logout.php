<?php
include './db.php';

session_start();  // Start the session before modifying it
session_unset();  // Unset all session variables
session_destroy();  // Destroy the session
header('Location: ./admin/login.php');  // Redirect to the login page
exit();  // Ensure no further code is executed
?>