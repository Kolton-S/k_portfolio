<?php

$db_name = "db_portfolio";
$db_pass = "";
$db_server = "localhost";
$db_user = "root";

$conn = new mysqli($db_server, $db_user, $db_pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
