<?php
include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$id = $_POST['id_katalog'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

$input = mysqli_query($koneksi, "update buku set id_katalog = '$id', judul_buku = '$judul_buku', pengarang = 
'$pengarang', thn_terbit = '$thn_terbit', penerbit = '$penerbit', harga = '$harga' where id_buku = '$id'");

if ($input) {
?>
    <script>
        alert('Data berhasil dirubah!!');
        window.location = "index.php";
    </script>
<?php
} else {
?>
    <script>
        alert('Data Gagal dirubah');
        window.location = "index.php"
    </script>
<?php
}

// mengalihkan ke tampilan awal yah
header("location:index.php");

?>