<?php
// config.php
$servername = "<endpoint database>"; // Server MariaDB
$username = "<username>";      // Username MariaDB
$password = "<password>";    // Password MariaDB
$dbname = "<nama database>";      // Nama Database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
