<?php
session_start();
include "koneksi.php";
if(isset($_SESSION["is_login"])){
    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="css_reg.css">
    <meta name="viewport" content="widht=device-widht">
</head>
<body>
    <div class="container">
        <div class="title">Form Login</div>
            <form method="POST">
                <div class="user-details">
                    
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Masukkan Password" required>
                    </div>

                </div>
                    </span>
                    <div class="button">
                        <input type="submit" name="submit" value="LOGIN">
                    </div>
                    </form>
                    <center><p>Jika Belum ada akun, Ya  <a href="regis.php">Regis</a></p></center>

            <?php
            
            if(isset($_POST['submit'])){
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                $enkrippass = hash("sha256", $password);
                $sql = "SELECT * FROM user WHERE username='$username' AND password='$enkrippass'";
                $result=$koneksi->query($sql);
                
                if($result->num_rows > 0){
                    $data = $result->fetch_assoc();
                    $_SESSION["nama"]=$data["nama"];
                    $_SESSION["is_login"] = true;

                       ?>
                        <script>
                        window.location.replace("dashboard.php");
                                </script>
                        <?php
                    }
                    else {  
                        ?>
                         <script type="text/javascript">
                         alert('Username dan Password Salah Silahkan Coba Lagi !');
                        window.location="login.php";
                         </script>
                        <?php
                    }
                }
                else { 
                }
            
            ?>
            </a>
        </div>
    </div>
</body>
</html>