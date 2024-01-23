<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/haha_you_thought/db_connect.php"); 

$_SITE_query = "SELECT * FROM site_config";
$_SITE_result = mysqli_query($conn, $_SITE_query);
while($row = mysqli_fetch_assoc($_SITE_result)) {
    $_SITE[$row['config_name']] = $row['config_value'];
}

// include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/php_functions/print_functions.php");
// pretty_print_array($_SITE);

?>