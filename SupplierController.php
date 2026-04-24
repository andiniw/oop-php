<?php
require_once '../config/database.php';

class SupplierController {
    public function index() {
        global $conn;
        $data = $conn->query("SELECT * FROM supplier");
        include '../app/views/supplier/index.php';
    }
}