<?php
// includ koneksi
include '../koneksi.php';

// Menangkap data id yang di kirim dari url 
$id_buku = $_GET['id_buku'];

// menghapus data dari table buku yah
mysqli_query($koneksi, "delete from buku where id_buku='$id_buku'");

// mengalihkan ke tampilan awal yah
header("location:index.php");
?>