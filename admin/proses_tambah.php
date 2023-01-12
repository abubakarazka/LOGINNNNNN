<?php
include '../koneksi.php';

$id = $_POST['id_katalog'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

$input = mysqli_query($koneksi, "insert into buku values('','$id','$judul','$pengarang','$thn','$penerbit','$harga')");

if ($input) {
?>
    <script>
        alert('Data berhasil Ditambahkan!!');
        window.location = "index.php";
    </script>
<?php
} else {
?>
    <script>
        alert('Data Gagal Ditambahkan');
        window.location = "index.php"
    </script>
<?php
}

// mengalihkan ke tampilan awal yah
header("location:index.php");

?>