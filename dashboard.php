<?php
include 'config/koneksi.php';

$database = new Koneksi();
$conn = $database->connect();

$query_produk = mysqli_query($conn, "SELECT * FROM produk");
$query_transaksi = mysqli_query($conn, "SELECT * FROM transaksi");
?>

<h1>Sistem Inventaris Produk</h1>

<a href="tambah_produk.php">Tambah Produk</a> |
<a href="form_transaksi.php">Tambah Transaksi</a>

<br><br>

<h2>Inventaris Produk</h2>

<table border="1" style="width:80%; border-collapse:collapse; text-align:center;">
<tr style="background-color:#f2f2f2;">
<th>ID</th>
<th>Nama Produk</th>
<th>Kategori</th>
<th>Stok</th>
</tr>

<?php while($row = mysqli_fetch_assoc($query_produk)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['nama_produk']; ?></td>
<td><?php echo $row['kategori']; ?></td>
<td><?php echo $row['stok']; ?></td>
</tr>

<?php } ?>

</table>

<br><br>

<h2>Data Transaksi</h2>

<table border="1" style="width:80%; border-collapse:collapse; text-align:center;">
<tr style="background-color:#f2f2f2;">
<th>ID</th>
<th>Nama Produk</th>
<th>Jumlah</th>
<th>Tanggal</th>
</tr>

<?php while($row = mysqli_fetch_assoc($query_transaksi)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['nama_produk']; ?></td>
<td><?php echo $row['jumlah']; ?></td>
<td><?php echo $row['tanggal']; ?></td>
</tr>

<?php } ?>

</table>