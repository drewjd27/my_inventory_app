<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <h1>Edit Barang</h1>
    <form action="index.php?action=update" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="kdbarang" name="kdbarang" value="<?= $barang['kdbarang'] ?>">
        
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang'] ?>" required>
        
        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" value="<?= $barang['harga'] ?>" required>
        
        <label for="stok_barang">Stok:</label>
        <input type="text" id="stok_barang" name="stok_barang" value="<?= $barang['stok_barang'] ?>" required>
        
        <label for="gambar">Gambar:</label>
        <input type="file" id="gambar" name="gambar">
        
        <input type="submit" value="Submit" class="btn btn-add">
    </form>
</body>
</html>
