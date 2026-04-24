<?php
require_once '../config/database.php';

class SupplierModel {

    public function getAll() {
        global $conn;
        return $conn->query("SELECT * FROM supplier");
    }

    public function insert($nama) {
        global $conn;
        $conn->query("INSERT INTO supplier (nama) VALUES ('$nama')");
    }

    public function delete($id) {
        global $conn;
        $conn->query("DELETE FROM supplier WHERE id=$id");
    }
}