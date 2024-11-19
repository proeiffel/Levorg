<?php
require_once '../src/Database.php';
require_once '../src/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();
    $result = $user->register($username, $email, $password);

    if ($result) {
        echo "Kayıt başarılı!";
    } else {
        echo "Kayıt sırasında bir hata oluştu.";
    }
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="Kullanıcı Adı" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Şifre" required>
    <button type="submit">Kayıt Ol</button>
</form>
