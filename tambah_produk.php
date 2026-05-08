<?php

require "config/koneksi.php";
require "classes/Produk.php";

$db = new Koneksi();
$conn = $db->connect();

$produk = new Produk($conn);

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];

    $produk->tambahProduk($nama,$kategori,$stok);
}

?>

<h2>Tambah Produk</h2>

<form method="POST">

<label>Nama Produk</label><br>
<input type="text" name="nama"><br><br>

<label>Kategori</label><br>
<select name="kategori">
<option value="Laptop">Laptop</option>
<option value="Smartphone">Smartphone</option>
</select><br><br>

<label>Stok</label><br>
<input type="number" name="stok"><br><br>

<button name="simpan">Simpan</button>

</form>