<!DOCTYPE html>
<html>

<head>
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <h1>Selamat Datang Di Index</h1>
    <h3>Halaman User</h3>

    <!-- Cek halaman apakah sudah login atau belum -->
    <?php
    session_start();
    if ($_SESSION['status'] != 'login') {
        header('location:login.php?pesan=belum_login');
    }
    ?>
    <!-- end -->

    <h4>Welcome <?php
                include '../koneksi.php';
                $email = $_SESSION['email'];
                $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
                foreach ($anggota as $nama) {
                    echo $nama['nama'];
                }
                ?> anda telah login</h4>

    <a href="update-anggota.php/id_anggota=<?php echo $nama['id_anggota']?>" class="btn btn-primary">customize</a>

    <div class="table">
        <h1>Data Buku</h1>
        <table class="table table-dark table-striped table-bordered">

            <tr>
                <th>ID Buku</th>
                <th>ID Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>aksi</th>

                <?php
                include '../koneksi.php';
                $buku = mysqli_query($koneksi, "select * from buku");
                foreach ($buku as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id_buku'] . "</td>";
                    echo "<td>" . $row['id_katalog'] . "</td>";
                    echo "<td>" . $row['judul_buku'] . "</td>";
                    echo "<td>" . $row['pengarang'] . "</td>";
                    echo "<td>" . $row['thn_terbit'] . "</td>";
                    echo "<td>" . $row['penerbit'] . "</td>";
                
                ?>
                <td><a href="keranjang.php">add to cart</a></td>
<?php
echo "</tr>";
                }            
?>
            </tr>
        </table>
        <a href="../logout.php" class="btn btn-primary">LOGOUT</a>
    </div>
</body>

</html>