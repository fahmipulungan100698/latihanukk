<?php
require 'koneksi.php';
$nik = htmlspecialchars( $_POST['nik']);
$nama = htmlspecialchars($_POST['nama']);
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);
$telp = htmlspecialchars($_POST['telp']);
$enkrippass = hash("sha256", $pass);

$validasidata = "SELECT * FROM user WHERE username ='$user'";
$result= $koneksi->query($validasidata);
if($result->num_rows > 0){
    
    ?>
    <script type="text/javascript">
        alert('Username Sudah Digunakan, Ganti dengan yang lain');
        window.location="regis.php";
        </script>
<?php

}
else{
    $sql="insert into user values('$nik','$nama','$user','$enkrippass','$telp')";
    if($koneksi->query($sql)){
        ?>
        <script type="text/javascript">
            alert('Data Berhasil Di Simpan, Silahkan Gunakan Untuk Login');
            window.location="index.php";
            </script>
    <?php
    }

}


?>