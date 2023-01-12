<html>

<head>
    <title>Login Ges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    
    <div class="p-3 mb-2 bg-body-secondary text-black">
        <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
            <h1>Login Aplikasi</h1>
            <h6>Admin Access</h6>
            <form action="proses_admin.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="admin" placeholder="name@example.com" name="admin">
                    <label for="floatingInput">admin</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <tr>
                    <td>userrrr klik <a href="../user/login.php" class="btn btn-primary">sini</a></td>
                </tr>
                <br>
                <tr>
                    <td>kembali ke halaman <a href="../index.php" class="btn btn-primary">utama</a></td>
                </tr>
            </form>
        </div>
    </div>

</body>

</html>