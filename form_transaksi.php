<?php
include 'config/koneksi.php';

$database = new Koneksi();
$conn = $database->connect();

if(isset($_POST['simpan'])){

    $nama = $_POST['nama_produk'];
    $jumlah = $_POST['jumlah'];

    $cek = mysqli_query($conn, "SELECT stok FROM produk WHERE nama_produk='$nama'");
    $data = mysqli_fetch_assoc($cek);

    if($data['stok'] >= $jumlah){

        mysqli_query($conn, "INSERT INTO transaksi (nama_produk, jumlah)
        VALUES ('$nama','$jumlah')");

        mysqli_query($conn, "UPDATE produk 
        SET stok = stok - $jumlah
        WHERE nama_produk='$nama'");

        echo "Transaksi berhasil!";

    } else {
        echo "Stok tidak mencukupi!";
    }
}
?>

<h2>Form Transaksi</h2>

<form method="POST">

Nama Produk:
<input type="text" name="nama_produk" required>
<br><br>

Jumlah Transaksi:
<input type="number" name="jumlah" required>
<br><br>

<button type="submit" name="simpan">Simpan Transaksi</button>

</form>

<br>

<a href="dashboard.php">Kembali ke Dashboard</a>