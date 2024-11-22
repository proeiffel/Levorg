<?php
include "../config/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $car_name = $_POST['car_name'];
    $car_model = $_POST['car_model'];
    $car_year = $_POST['car_year'];
    $car_photo = $_FILES['car_photo']['name'];

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($car_photo);
    move_uploaded_file($_FILES['car_photo']['tmp_name'], $target_file);

    $sql = "INSERT INTO cars (user_id, car_name, car_model, car_year, car_photo) VALUES (1, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$car_name, $car_model, $car_year, $car_photo]);

    echo "Car added successfully!";
}
?>
