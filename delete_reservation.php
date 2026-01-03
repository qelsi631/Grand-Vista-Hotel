<?php
require "config.php";

$id = (int) $_POST["id"];

$stmt = $conn->prepare("DELETE FROM reservations WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: admin.php");
exit;
