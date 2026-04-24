<?php
require_once __DIR__ . '/../models/ProdukModel.php';

class ProdukController {
    public function index() {
        $model = new ProdukModel();
        $data = $model->getAll();

        include __DIR__ . '/../views/produk/index.php';
    }
}
