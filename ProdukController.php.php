<?php
require_once '../models/ProdukModel.php';

class ProdukController {
    public function index() {
        $model = new ProdukModel();
        $data = $model->getAll();
        include '../views/produk.php';
    }
}