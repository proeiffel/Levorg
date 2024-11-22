<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Your Car</title>
</head>
<body>
    <h1>Add Your Car</h1>
    <form action="../api/add_car.php" method="POST" enctype="multipart/form-data">
        <label>Car Name:</label><br>
        <input type="text" name="car_name" required><br>
        <label>Car Model:</label><br>
        <input type="text" name="car_model" required><br>
        <label>Car Year:</label><br>
        <input type="number" name="car_year" required><br>
        <label>Upload Photo:</label><br>
        <input type="file" name="car_photo" required><br>
        <button type="submit">Add Car</button>
    </form>
</body>
</html>
