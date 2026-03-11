<?php
include "koneksi.php";

/* Membuat Produk tambahlah*/
if (isset($_POST['simpan'])) {

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $namaFile = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmpName, "uploads/" . $namaFile);

    mysqli_query($conn, "INSERT INTO produk 
        (nama, harga, deskripsi, foto) 
        VALUES 
        ('$nama','$harga','$deskripsi','$namaFile')");

    header("Location: index.php");
    exit();
}

/* untuk hapus produks*/
if (isset($_GET['hapus'])) {

    $id = $_GET['hapus'];

    $data = mysqli_query($conn, "SELECT foto FROM produk WHERE id='$id'");
    $row = mysqli_fetch_assoc($data);

    unlink("uploads/" . $row['foto']);

    mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");

    header("Location: index.php");
    exit();
}

$data = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Katalog Produk UMKM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Katalog Produk UMKM</h1>

<div class="form-container">
    <h2>Tambah Produk</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama Produk" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>
        <input type="file" name="foto" required>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</div>

<div class="produk-container">
<?php while($row = mysqli_fetch_assoc($data)) : ?>
    <div class="card">
        <img src="uploads/<?= $row['foto']; ?>">
        <h3><?= $row['nama']; ?></h3>
        <p class="harga">Rp <?= number_format($row['harga']); ?></p>
        <p><?= $row['deskripsi']; ?></p>
        <a class="hapus" href="?hapus=<?= $row['id']; ?>" 
           onclick="return confirm('Yakin hapus?')">Hapus</a>
    </div>
<?php endwhile; ?>
</div>

</body>
</html>