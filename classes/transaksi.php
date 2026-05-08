<?php
include 'config/koneksi.php';

$database = new Koneksi();
$conn = $database->connect();

$query = mysqli_query($conn,"SELECT * FROM transaksi");
?>

<h2>Data Transaksi</h2>

<table border="1" style="width:70%; border-collapse:collapse;">
<tr>
<th>ID</th>
<th>Nama Produk</th>
<th>Jumlah</th>
<th>Tanggal</th>
</tr>

<?php while($row = mysqli_fetch_assoc($query)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['nama_produk']; ?></td>
<td><?php echo $row['jumlah']; ?></td>
<td><?php echo $row['tanggal']; ?></td>
</tr>

<?php } ?>

</table>