<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are correct
    if ($username === 'myusername' && $password === 'mypassword') {
        // Start the session and set a session variable
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to success page
        header('Location: success.php');
        exit();
    } else {
        // Redirect back to login page with error message
        header('Location: login.php?error=1');
        exit();
    }
?>

