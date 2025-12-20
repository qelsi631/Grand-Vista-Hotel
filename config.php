<?php
$conn = new mysqli("localhost", "root", "", "grand_vista_hotel");

if ($conn->connect_error) {
    die("DB Connection failed");
}

$host = "localhost";
$user = "root";
$password = "";
$database = "grand_vista_hotel";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
