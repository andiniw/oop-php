<?php
require_once '../config/database.php';

class TransaksiModel {

    public function getAll() {
        global $conn;
        return $conn->query("SELECT * FROM transaksi");
    }

    public function insert($total) {
        global $conn;
        $conn->query("INSERT INTO transaksi (total) VALUES ('$total')");
    }

    public function delete($id) {
        global $conn;
        $conn->query("DELETE FROM transaksi WHERE id=$id");
    }
}