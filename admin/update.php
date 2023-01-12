<html>
<head>
    <title> update data</title>
</head>
<body>
<div class="container">
        <h1>merubah Data Buku</h1>


        <?php 
        
        include "../koneksi.php";
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
        while($meledak = mysqli_fetch_array($data));{
        
        ?>

        
        <form action="proses_tambah.php" method="post">
            <!-- id buku -->
            <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku'];?>">
            <label>ID Katalog</label>
            <input type="number" name="id_katalog" value="<?php echo $meledak ['id_katalog'];?>">
            <br>
            <label>Judul Buku</label>
            <input type="text" name="judul_buku"  value="<?php echo $meledak ['judul_buku'];?>">
            <br>
            <label>Pengarang</label>
            <input type="text" name="pengarang" value="<?php echo $meledak ['pengarang'];?>">
            <br>
            <label>Tahun Terbit</label>
            <input type="date" name="thn_terbit" value="<?php echo $meledak ['thn_terbit'];?>">
            <br>
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?php echo $meledak ['penerbit'];?>">
            <br>
            <label>harga</label>
            <input type="text" name="harga" value="<?php echo $meledak ['harga'];?>">
            <br>
            <input type="submit" value="submit">
            <br>
        </form>
        <?php 
    }
    ?>
    </div>
</body>
</html>