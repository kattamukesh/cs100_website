<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['full_name']) && isset($_POST['dob'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];

    $file = fopen("users.txt", "a");
    fwrite($file, $username . "," . $password . "," . $email . "," . $full_name . "," . $dob . "\n");
    fclose($file);

    echo "User created successfully!";
} else {
    echo "Error: Please fill in all fields.";
}
?>
