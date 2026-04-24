<?php
require_once '../config/database.php';

class KategoriController {
    public function index() {
        global $conn;
        $data = $conn->query("SELECT * FROM kategori");
        include '../app/views/kategori/index.php';
    }
}