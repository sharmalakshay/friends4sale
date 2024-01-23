<?php
include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php");

// Get the user's ID
$user_id = $_SESSION['user_id'];

// Get the post text from the form
$post_text = $_POST['newPost'];

// Insert the post into the database
$sql = "INSERT INTO posts (user_id, post_text) VALUES ('$user_id', '$post_text')";
$result = mysqli_query($conn, $sql);

if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
}

// Redirect to the home page
header("Location: /friends4sale/my_posts");
?>