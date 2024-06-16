<?php
require 'config/database.php';
require 'app/controllers/BarangController.php';

$controller = new BarangController($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $data = [
            'kdbarang' => $_POST['kdbarang'],
            'nama_barang' => $_POST['nama_barang'],
            'harga' => $_POST['harga'],
            'stok_barang' => $_POST['stok_barang'],
            'gambar' => $_FILES['gambar']['name']
        ];
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/images/' . $_FILES['gambar']['name']);
        $controller->store($data);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $data = [
            'kdbarang' => $_POST['kdbarang'],
            'nama_barang' => $_POST['nama_barang'],
            'harga' => $_POST['harga'],
            'stok_barang' => $_POST['stok_barang'],
            'gambar' => $_FILES['gambar']['name']
        ];
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/images/' . $_FILES['gambar']['name']);
        $controller->update($data);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}
?>
