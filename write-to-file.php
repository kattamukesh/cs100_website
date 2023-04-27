<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $file = fopen("login.txt", "a");
    $users = file("login.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Check if the username and password are correct
    $found = false;
    foreach ($users as $user) {
        list($saved_username, $saved_password) = explode(':', $user);
        if ($username === $saved_username && $password === $saved_password) {
            $found = true;
            break;
        }
    }

    // Log the user in and write to the file if the username and password are correct
    if ($found) {
        fwrite($file, "$username:$password\n");
        fclose($file);
        echo "Login successful";
    } else {
        echo "Incorrect username or password";
    }
}
?>
