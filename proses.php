<?php
            include 'koneksi.php';

            $id = $_POST['id_katalog'];
            $judul = $_POST['judul_buku'];
            $pengarang = $_POST['pengarang'];
            $thn = $_POST['thn_terbit'];
            $penerbit = $_POST['penerbit'];
            
            //Validasi data kosong
            if(empty($_POST['id_katalog'])||empty($_POST['judul_buku'])||empty($_POST['pengarang'])
            ||empty($_POST['thn_terbit'])||empty($_POST['penerbit'])){
                ?>
                <script lang="JavaScript">
                    alert('Data harus di lengkapi yahh');
                    document.location='add.php';
                </script>
            <?php
            }

            $input = mysqli_query($koneksi, "insert into buku values('','$id','$judul','$pengarang','$thn','$penerbit')");

            if($input){
                ?>
                <script>
                    alert('Data berhasil Ditambahkan!!');
                    window.location = "index.php";
                </script>
                <?php
            }else{
                ?>  
                <script>
                alert('Data Gagal Ditambahkan');
                window.location = "add.php"
                </script>
                <?php
            }
        ?>