<?php
$conn = new mysqli("localhost", "root", "", "bagstore");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>