<?php
// Start session to handle error messages
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted password
    $password = trim($_POST['password']);

    // Set the correct password
    $correctPassword = "crystalpalace";

    // Check if the password is correct
    if ($password === $correctPassword) {
        // Redirect to the protected page (index.html)
        header("Location: /private/index.html");
        exit;
    } else {
        // Save error message to session and redirect back to the form
        $_SESSION['error'] = "Incorrect password! Please try again.";
        header("Location: /private/index.php"); // Ensure the redirection is to the PHP file
        exit;
    }
}
