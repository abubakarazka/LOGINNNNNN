<!DOCTYPE html>
<html>

<head>
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <h1>Selamat Datang Di Index</h1>
    <h3>Halaman Admin</h3>

    <!-- Cek halaman apakah sudah login atau belum -->
    <?php
    session_start();
    if ($_SESSION['status'] != 'login') {
        header('location:login_admin.php?pesan=belum_login');
    }
    include '../koneksi.php';
    $buku = mysqli_query($koneksi, "select * from buku");
    $anggota = mysqli_query($koneksi, "select * from anggota");

    $jumlah_buku = mysqli_num_rows($buku);
    $jumlah_anggota = mysqli_num_rows($anggota);
    
    
    ?>
    <!-- end -->

    
    <div>
        


        <marquee direction="right"><h3 style="lightgray;"> Welcome <?php echo $_SESSION['admin']?> anda telah login </h3></marquee>
            </div>
            <div class="card-body" style="margin-right:20px">
<div class="margin" style="margin-left: 20px;">
    <h1 style="text-shadow: 2px 2px 2px lightgray; margin-bottom: 30px;">Data Buku</h1>
    
                <h2>Selamat Datang di BUKU STORE</h2>

                <a href="sandbox.php" class="btn btn-primary">sanbox</a>

                <h3>Total Buku Tersedia : <?php echo $jumlah_buku; ?></h3>
    <h3> Total Semua Harga Buku :
                <?php
                $db = mysqli_query($koneksi, "SELECT * FROM buku;");
                while ($r = mysqli_fetch_array($db)) {
                    $harga[] = $r['harga'];
                }
                $totalHarga = array_sum($harga);
                echo "Rp. " . number_format($totalHarga) . " ,-";

                ?>
        <h1>Data Buku</h1>
        <h3>TOTAL BUKU TERSEDIA : <?php echo $jumlah_buku;?></h3>
        
        <a href="add.php" class="btn btn-primary">tambah buku</a>
        <a href="cetak_buku.php" class="btn btn-primary">cetak</a>
        
        <br>
        <br>
        <table class="table table-dark table-striped table-bordered">
            <tr>
                <th>ID Buku</th>
                <th>ID Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>Harga</th>
                <th>Aksi</th>

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
                    echo "<td>" . $row['harga'] . "</td>";
                ?>
                    <td>
                        <a href="update.php?id_buku==<?php echo $row['id_buku']; ?>">EDIT</a>
                        <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']; ?>">HAPUS</a>
                    </td>


                <?php
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>
        
        <br>
        <h1>Data anggota</h1>
        <?php
        include '../koneksi.php';
    $anggota = mysqli_query($koneksi, "select * from anggota");

    
        ?>
        <h3>TOTAL ANGGOTA TERSEDIA : <?php echo $jumlah_anggota;?></h3>
        <a href="add_anggota.php" class="btn btn-primary">tambah Anggota</a>
        <a href="cetak_anggota.php" class="btn btn-primary">cetak</a>
        <br>
        <br>
        <table class="table table-dark table-striped table-bordered">
            <tr>
                <th>ID anggota</th>
                <th>nama</th>
                <th> no_telp</th>
                <th>alamat</th>
                <th>email</th>
                <th>password</th>
                
                <?php
                include '../koneksi.php';
                $anggota = mysqli_query($koneksi, "select * from anggota");
                foreach ($anggota as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id_anggota'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['no_telp'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                }
                ?>
                
            </tr>
        </table>
        <a href="../logout.php" class="btn btn-primary">LOGOUT</a>
    
    </div>
</body>

</html>