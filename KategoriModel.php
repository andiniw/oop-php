<?php
require_once '../config/database.php';

class KategoriModel {

    public function getAll() {
        global $conn;
        return $conn->query("SELECT * FROM kategori");
    }

    public function insert($nama) {
        global $conn;
        $conn->query("INSERT INTO kategori (nama) VALUES ('$nama')");
    }

    public function delete($id) {
        global $conn;
        $conn->query("DELETE FROM kategori WHERE id=$id");
    }
}