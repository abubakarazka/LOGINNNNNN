<html>
<head>
    <title>add anggota</title>
</head>
<body>
<div class="container">
        <h1>Tambahkan Data anggota</h1>

        <form action="proses-tambah-anggota.php" method="post">
            <label>ID anggota</label>
            <input type="number" name="id_anggota">
            <br>
            <label>nama</label>
            <input type="text" name="nama">
            <br>
            <label>no_telp</label>
            <input type="text" name="no_telp">
            <br>
            <label>alamat</label>
            <input type="text" name="alamat">
            <br>
            <label>email</label>
            <input type="email" name="email">
            <br>
            <label>password</label>
            <input type="password" name="password">
            <br>
            <input type="submit" value="submit">
            <br>
        </form>
    </div>
</body>
</html>