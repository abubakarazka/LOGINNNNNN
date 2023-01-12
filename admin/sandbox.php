<html>
    <head>
        <title>SANDBOX</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
        <h1>Welcome to SANDBOX</h1>
        <h3>test experiment</h3>

        <!-- form searcing -->
        <form action="sandbox.php" method="get">
            <label>cari</label>
            <input type="text" name="cari">
            <input type="submit" value="search" class="btn btn-primary">
        </form>
        <!-- form searching -->

        <?php 
        
        // judul hasil pencarian
        include '../koneksi.php';
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "hasil pencarian : ".$cari;
        }
        // judul hasil pencarian 
        
        ?>

        <table class="table table-dark table-striped table-bordered">
            <tr>
                <th>no</th>
                <th>nama</th>
            </tr>
        

        <?php 
        

        
        // hasil pencarian muncul disini
        include '../koneksi.php';
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi,"select * from anggota where nama like '%".$cari."%' ");
        }else{
            $data = mysqli_query($koneksi,"select * from anggota");
        }
        $no = 1;
        while($meledak = mysqli_fetch_array($data)){

       ?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $meledak['nama']; ?></td>
</tr>
        
        <?php 
        
        }   
        
        
        ?>
     
    
        </table>
    </body>
</html>