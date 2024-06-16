<?php
require_once 'app/models/Barang.php';

class BarangController {
    private $barangModel;

    public function __construct($pdo) {
        $this->barangModel = new Barang($pdo);
    }

    public function index() {
        $barangs = $this->barangModel->getAll();
        require 'app/views/barang/index.php';
    }

    public function create() {
        require 'app/views/barang/create.php';
    }

    public function store($data) {
        $this->barangModel->add($data);
        header('Location: index.php');
    }

    public function edit($id) {
        $barang = $this->barangModel->getById($id);
        require 'app/views/barang/edit.php';
    }

    public function update($data) {
        $this->barangModel->update($data);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->barangModel->delete($id);
        header('Location: index.php');
    }
}
?>
