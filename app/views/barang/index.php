<!DOCTYPE html>
<html>
<head>
    <title>Alfamidi | Manajemen Barang</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <h1>Alfamidi | Manajemen Barang</h1>
    <div id="clock"></div>
    <table>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($barangs as $barang): ?>
        <tr>
            <td><?= $barang['kdbarang'] ?></td>
            <td><?= $barang['nama_barang'] ?></td>
            <td>Rp<?= number_format($barang['harga'], 0, ',', '.') ?></td>
            <td><?= $barang['stok_barang'] ?></td>
            <td class="image-cell"><img src="assets/images/<?= $barang['gambar'] ?>" alt="<?= $barang['nama_barang'] ?>" class="barang-image" width="50"></td>
            <td>
                <a href="index.php?action=edit&id=<?= $barang['kdbarang'] ?>" class="btn btn-edit">Edit</a>
                <a href="index.php?action=delete&id=<?= $barang['kdbarang'] ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php?action=create" class="btn btn-add">Tambah Barang</a>
    <script src="assets/js/clock.js"></script>
</body>
</html>
