<?php
require($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php");

// Get the registration form data
$display_name = $_POST['display_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert the user into the database
$sql = "INSERT INTO users (display_name, email, username, password) VALUES ('$display_name', '$email', '$username', '$password')";
$result = mysqli_query($conn, $sql);

if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
}

// Login the user
$_SESSION['user_id'] = mysqli_insert_id($conn);
$_SESSION['display_name'] = $display_name;
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

// Redirect to the home page
header("Location: /friends4sale/");
?>