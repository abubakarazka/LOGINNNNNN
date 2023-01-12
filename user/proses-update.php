<?php
include '../koneksi.php';

$id = $_POST['id_anggota'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

$input = mysqli_query($koneksi, "update anggota set id_anggota = '$id', 778nama = '$nama', no_telp = '$no_telp', alamat = '$alamat' where id_anggota = '$id'");

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