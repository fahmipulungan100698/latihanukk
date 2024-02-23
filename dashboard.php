<div id="preloader">
  <?php include("loading.html"); ?>

</div>
<?php
include 'nav.php';
?>
<!-- Dashboard -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Halaman User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <body bgcolor="black">
    <div class="navbody">

      <img src="img/bg4.png" class="img-fluid" alt="pic">
      <p>
        Selamat Datang &nbsp; <span>
          <?= $_SESSION['nama']; ?>
        </span> &nbsp; Di Website Kami</p>

    </div>
    <!-- Selesai Dashboard -->

    <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function () {
        loader.style.display = "none";
      })


    </script>


  </body>

</html>