<?php
include "session.php";
include"koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman User</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary bg-primary"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Selamat Datang <?= $_SESSION['nama'] ?>
       </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Download</a>
            </li>
            <li class="nav-item dropdown">
            
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
            </li>
          </ul>
         
          <button class="glow-on-hover" onclick="window.location.href='logout.php'">Logout</button>


          </form>
        </div>
      </div>
    </nav>

    <div class="navbody">
    <img src="img/bg4.png" class="img-fluid" alt="pic">
    </div>
  </body>
</html>