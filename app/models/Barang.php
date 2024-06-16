<?php
class Barang {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM tblbarang");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM tblbarang WHERE kdbarang = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add($data) {
        $stmt = $this->pdo->prepare("INSERT INTO tblbarang (kdbarang, nama_barang, harga, stok_barang, gambar) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$data['kdbarang'], $data['nama_barang'], $data['harga'], $data['stok_barang'], $data['gambar']]);
    }

    public function update($data) {
        $stmt = $this->pdo->prepare("UPDATE tblbarang SET nama_barang = ?, harga = ?, stok_barang = ?, gambar = ? WHERE kdbarang = ?");
        return $stmt->execute([$data['nama_barang'], $data['harga'], $data['stok_barang'], $data['gambar'], $data['kdbarang']]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM tblbarang WHERE kdbarang = ?");
        return $stmt->execute([$id]);
    }
}
?>
