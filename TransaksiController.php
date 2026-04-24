<?php
require_once '../config/database.php';

class TransaksiController {
    public function index() {
        global $conn;
        $data = $conn->query("SELECT * FROM transaksi");
        include '../app/views/transaksi/index.php';
    }
}