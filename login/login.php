<?php
require($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php");

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// check the username and password against the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
}

// If the username and password are correct, log the user in
if(mysqli_num_rows($result) > 0) {
    // Set the user's session variables
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['display_name'] = $row['display_name'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];

    // Redirect to the home page
    header("Location: /friends4sale/");
} else {
    // Redirect to the login page
    header("Location: /friends4sale/login/");
}
?>