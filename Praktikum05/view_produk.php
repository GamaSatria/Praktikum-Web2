<?php 
require_once 'dbkoneksi.php';

$_id = $_GET['id'];

$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();

if ($row) {
    $id = isset($row['id']) ? $row['id'] : '';
    $kode = isset($row['kode']) ? $row['kode'] : '';
    $namaProduk = isset($row['nama']) ? $row['nama'] : '';
    $hargaJual = isset($row['harga_jual']) ? $row['harga_jual'] : '';
    $hargaBeli = isset($row['harga_beli']) ? $row['harga_beli'] : '';
    $stok = isset($row['stok']) ? $row['stok'] : '';
    $minStok = isset($row['min_stok']) ? $row['min_stok'] : '';
    $jenisProduk = isset($row['jenis_produk_id']) ? $row['jenis_produk_id'] : '';
} else {
    // Jika data tidak ditemukan, Anda dapat menambahkan kode lain di sini
    echo "Data tidak ditemukan.";
}
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?php echo $id; ?></td></tr>
        <tr><td>Kode</td><td><?php echo $kode; ?></td></tr>
        <tr><td>Nama Produk</td><td><?php echo $namaProduk; ?></td></tr>
        <tr><td>Harga Jual</td><td><?php echo $hargaJual; ?></td></tr>
        <tr><td>Harga Beli</td><td><?php echo $hargaBeli; ?></td></tr>
        <tr><td>Stok</td><td><?php echo $stok; ?></td></tr>
        <tr><td>Minimum Stok</td><td><?php echo $minStok; ?></td></tr>
        <tr><td>Jenis Produk</td><td><?php echo $jenisProduk; ?></td></tr>
    </tbody>
</table>
