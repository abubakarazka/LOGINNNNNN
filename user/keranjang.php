<html>
    <head>
        <title>Cart</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
        <h1>Cart</h1>
        <h3>Keranjang anda terisi : </h3>
        <table class="table table-dark table-striped table-bordered">
            <tr>
                <th>ID Buku</th>
                <th>ID Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
        <?php

        include '../koneksi.php';
        $buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi,"select * from buku where id_buku = ' $buku'");

        foreach ($data as $buku)
            echo "<tr>";
            echo "<td>" . $buku['id_buku'] . "</td>";  
            echo "<td>" . $buku['id_katalog'] . "</td>";
            echo "<td>" . $buku['judul_buku'] . "</td>";
            echo "<td>" . $buku['pengarang'] . "</td>";
            echo "<td>" . $buku['thn_terbit'] . "</td>";
            echo "<td>" . $buku['penerbit'] . "</td>";
        ?>
            </tr>
        </table>
    </body>
</html>