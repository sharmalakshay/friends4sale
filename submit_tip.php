<?php
include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php");

// Get the user's ID
$user_id = $_SESSION['user_id'];

// Get the post id from the form
$post_id = $_POST['post_id'];

// Make an insert in tips table
$sql = "INSERT INTO tips (user_id, post_id) VALUES ('$user_id', '$post_id')";

$result = mysqli_query($conn, $sql);

if(!$result) echo "Error: " . $sql . "<br>" . mysqli_error($conn);
else echo "success";

?>