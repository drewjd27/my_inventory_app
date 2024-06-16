<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
        <label for="kdbarang">Kode Barang:</label>
        <input type="text" id="kdbarang" name="kdbarang" required>
        
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required>
        
        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" required>
        
        <label for="stok_barang">Stok:</label>
        <input type="text" id="stok_barang" name="stok_barang" required>
        
        <label for="gambar">Gambar:</label>
        <input type="file" id="gambar" name="gambar" required>
        
        <input type="submit" value="Submit" class="btn btn-add">
    </form>
</body>
</html>
