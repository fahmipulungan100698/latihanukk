<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link rel="stylesheet" href="css_reg.css">
    <meta name="viewport" content="widht=device-widht">
</head>
<body>
    <div class="container">
        <div class="title">Form Registrasi</div>
            <form action="reg_process.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">NIK</span>
                        <input type="text" name="nik" placeholder="Masukkan NIK" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nama</span>
                        <input type="text" name="nama" placeholder="Masukkan Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No. Telepon</span>
                        <input type="text" name="telp" placeholder="Masukkan Telp" >
                    </div>
                </div>
                    </span>
                    <div class="button">
                        <input type="submit" value="DAFTAR">
                    </div>
                    <center><p>Apakah Anda ada Akun ? <a href="login.php">Login</a></p></center>
                </div>
            </form>
        </div>
    </div>
</body>
</html>