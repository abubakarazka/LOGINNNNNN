<html>

<head>
    <title>Login Ges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="p-3 mb-2 bg-info text-dark">
        <div class="p-3 mb-2 bg-info-subtle text-emphasis-info">
            
                <h1>Login Aplikasi</h1>
                <h6>User Access</h6>
                <form action="proses.php" method="post">
                    <form>
                        <center>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control form-control border-primary" id="email" placeholder="name@example.com" name="email">
                                <label for="floatingInput" class="form-label">Email address</label>
                            </div>
                        </center>
                        <center>
                            <div class="form-floating">
                                <input type="password" class="form-control form-control border-primary" id="pass" placeholder="Password" name="pass">
                                <label for="floatingPassword" class="form-label">Password</label>
                            </div>
                        </center>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <tr>
                            <td>admin klik <a href="../admin/login_admin.php" class="btn btn-primary">sini</a></td>
                        </tr>
                        <br>
                        <tr>
                            <td>kembali ke halaman <a href="../index.php" class="btn btn-primary">utama</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>anda belum punya akun ? daftar<a href="daftar.php" class="btn btn-primary">disini</a></h4>
                            </td>
                        </tr>
                    </form>
                </form>
            
        </div>
    </div>
</body>

</html>