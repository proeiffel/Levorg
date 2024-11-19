<?php
require_once '../src/Database.php';
require_once '../src/User.php';

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];
?>
<h1>Hoşgeldin, <?php echo $user['username']; ?>!</h1>
<p>Profil Bilgileri:</p>
<p>Email: <?php echo $user['email']; ?></p>
<p>Hakkımda: <?php echo $user['bio']; ?></p>
