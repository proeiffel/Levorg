<?php
include "../config/db.php";

$sql = "SELECT username, location_lat, location_lng FROM users";
$stmt = $conn->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);
?>
