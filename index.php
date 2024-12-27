<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Otomotif</title>
    <link rel="icon" href="img/logo.png"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      <!-- nav begin -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Daily Otomotif</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li>
                <a class="nav-link" href="#schedule">Schedule</a>
              </li>
              <li>
                <a class="nav-link" href="#aboutme">About Me</a>
              </li>
              <li>
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
            <button
              type="button"
              class="btn btn-dark theme"
              id="dark"
              title="dark"
            >
              <i class="bi bi-moon-stars-fill"></i>
            </button>
            <button
              type="button"
              class="btn btn-danger theme"
              id="light"
              title="light"
            >
              <i class="bi bi-brightness-high"></i>
            </button>
            </ul>
          </div>
        </div>
      </nav>
      <!-- nav end -->

      <!-- hero begin -->
      <section id="hero" class="text center p-5 bg-info-subtle text-sm-start">
        <div class="container">
          <div class="d-sm-flex flex-sm-row-reverse align-item-center">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhjJ8qM-mu1FK4CdpokreXo70ceW0mzxiGEJtToFzIi5VXROEMQQ2c_B6hspMnneR5UM-Fq7iCqfEdxLBV0-kXYt5LxYPJaPtRaY0t-sP3bhu8PaM5n79fQCQIHAQs9bCR0aYLeHPMEt6chqzN8YcbDGqqzOe5mF2AmDqC8KKKgPe04lYhS0421sxQpgw2h"
            class="img-fluid" width="300">
            <div>
              <h1 class="fw-bold display-4">Dunia otomotif</h1>
              <h4 class="lead display-6">Mencatat semua Hal-hal tentang dunia otomotif</h4>
              <h6>
                <span id="tanggal"></span>
                <span id="jam"></span>
              </h6>
            </div>
          </div>
        </div>
      </section>
      <!-- hero end -->
      <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      $no = 1;
      while($row = $hasil->fetch_assoc()){
        ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

      <!-- gallery begin -->
      <section id="gallery" class="text-center p-5 bg-warning" class="isi">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3">Gallery</h1>
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiD05Wy-Nq_oXExz1t9pkbcAG0oahu_QGxOCIlcUjUTiiCxpYCruZ_tMYZtkU5QEMWLPUEQvmicCv0d89y3B6sUMa0hala1b_L4zXp8OgccTI1C6b_vo1X7vqnbJRq0QgtFB_2txKFG8WcmVpwTkrSJsAePHjX_HrM-DcbCViVrflt_1essUYGSObJUcjnb"
                class="d-block w-100" alt="..." width="100">
              </div>
              <div class="carousel-item active">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjGwD92lBgjYkVXNBV0wRw-5QS27aap9BtLA15p57D2QSYtemZRkrfuI0BwFNNBnj9RUy-Go4Gjb_Ij3eKiJMcaizYk3NYrhADUG12GJX8x1TXgYoQQ0vxrw5-twawj_Ak_2BT1oL_mgIuTIczEe1hFkxrT9RYmcQUrEVwEdlAvEfkO7eHdbNdprp9dAlVI"
                class="d-block w-100" alt="..." width="100">
              </div>
              <div class="carousel-item">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiAvZbsAn5OrA3baY-up6_CME2cHpBOTxZVAuY0sXP8zEbeICzsYtmu67ni3hpL9ppmmVeITcZqRDuVUjwIx2GNtbjjqZHdLCNjlQ6hCODDRAyI_ufmfB99otI0F8MidJwY2C41vUDwln64hlbiKg4yORgG_wgRpiDuUdozPijABfgjLbsvria6f6CkaIR_"
                class="d-block w-100" alt="..." width="100">
              </div>
              <div class="carousel-item">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEj8hdaUowiZFnz1cffi-VCqf5A-P6Nxv7gsnBJyDcuxAiHcbTmT8sgZWULYrHtJkA-2sWGhT1ngNoLLidSPFPk24eaRRKQIFpch4G0zRG8zYjxwAUJ0xX8A5oGOHRg_CqOzo_D6OAyf5ykTjDbkrbMimf4zxIk0Z3Ij2ny8bKy0zBzm4Hat5HBfHaRlf3Kh"
                class="d-block w-100" alt="..." width="100">
              </div>
              <div class="carousel-item">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgLJ0oIk-ipHyR4qnwDD00u7eT3UlP-BQ-E9UYMuMs-b0qIwikpTX9ddWxshbM23lEukrsPmRee0MftTBzQEFIZte7EYepAairiiKoy185SUKeaqN-37HuIIid3L6ra-uKNSTQVJ1Bh5Km2UHpFodQJrE1eQl-9dQX8HttE8i1M2XgK9XVqB3jwxI5c4X2A"
                class="d-block w-100" alt="..." width="100">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <!-- gallery end -->

      <!-- schedule begin -->
      <section id="schedule" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3">Schedule</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-header bg-danger text-white">
                  Senin
                </div>
                <div class="card-body">
                  <h5 class="card-title">Basis Data</h5>
                  <p class="card-text">(10.20-12.00) D.3.N</p>
                  <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
                  <p class="card-text">(12.30-15.00 wib) H.5.10</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-header bg-danger text-white">
                  Selasa
                </div>
                <div class="card-body">
                  <h5 class="card-title">Pemprograman Berbasis Web</h5>
                  <p class="card-text">(10.20-12.00 wib) D.2.J</p>
                  <h5 class="card-title">Pendidikan Kewarganegaraan</h5>
                  <p class="card-text">(12.30-15.00 wib) Aula H.7</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-header bg-danger text-white">
                  Rabu
                </div>
                <div class="card-body">
                  <h5 class="card-title">Logika Informatika</h5>
                  <p class="card-text">(12.30-15.00 wib) H.4.10</p>
                  <h5 class="card-title">Probabilitas dan Statistika</h5>
                  <p class="card-text">(15.30-18.00 wib) H.4.11</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-header bg-danger text-white">
                  Kamis
                </div>
                <div class="card-body">
                  <h5 class="card-title">Basis Data</h5>
                  <p class="card-text">(08.40-10.20 wib) H.4.6</p>
                  <h5 class="card-title">Sistem Operasi</h5>
                  <p class="card-text">(12.30-15.00 wib) H.4.11</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-header bg-danger text-white">
                  Jumat
                </div>
                <div class="card-body">
                  <h5 class="card-title">Jumat</h5>
                  <p class="card-text">FREE</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-header bg-danger text-white">
                  Sabtu
                </div>
                <div class="card-body">
                  <h5 class="card-title">Sabtu</h5>
                  <p class="card-text">FREE</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- schedule end -->

      <!-- aboutme begin -->
       <section id="aboutme" class="text-center p-5 bg-info-subtle text-sm-start">
        <div class="container">
          <div class="d-sm-flex flex-sm-row align-item-center justify-content-center">
              <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjFGA1vPaSfAz_mBQ2aiLnulQsWh0DsSdDL2Kog5sm9yPxZ_MsYZcJDaHNueREArQVlRP3Je8bT4rGyZquDKvHkBG5e98xWdvWe-r7ywS8aGKzvgXqYoR0IS2K6UKcM03r1TQr8RJqaKVIGVuxwiIYiJMJVZokvKBzG_IFY3wAGAd1_2xBTAhmjW9kSiEGk" 
              alt="..."
              class="rounded-circle border shadow" 
              width="300"/>
          </div>
          <p>A11.2023.15327</p>
          <h3 class="fw-bold display">
            Abdul Khalim
          </h3>
          <p class="lead display-6">
            Program Studi Teknik Informatika
          </p>
          <p class="fw-bold-display"><a href="https://dinus.ac.id/" class="text-body-secondary">Universitas Dian Nuswantoro</a></p>
        </div>
       </section>
      <!-- aboutme end -->

      <!-- footer begin -->
      <footer class="text-center p-5">
        <div>
          <a href="https://www.instagram.com/abd_khlm"><i class="bi bi-instagram h2 p-2 text-body-secondary"></i></a>
          <a href="https://twitter.com/ABD_KHLM_"><i class="bi bi-twitter-x h2 p-2 text-body-secondary"></i></a>
          <a href="https://wa.me/+6281329239256"><i class="bi bi-whatsapp h2 p-2 text-body-secondary"></i></a>
        </div>
        <div>
          <p class="text-center p-2">Abdul Khalim &copy; 2024</p>
        </div>
        </footer>
      <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script type="text/javascript">
      // Display Date and Time
      window.setTimeout("tampilWaktu()", 1000);
      function tampilWaktu () {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()",1000);
        document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
      document.getElementById("dark").onclick = function () {
        document.body.style.backgroundColor = "black";

        document
          .getElementById("hero")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("hero")
          .classList.add("bg-secondary", "text-white");

        document
          .getElementById("gallery")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("gallery")
          .classList.add("bg-secondary", "text-white");

        document
          .getElementById("aboutme")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("aboutme")
          .classList.add("bg-secondary", "text-white");

        document.getElementById("footer").classList.remove("text-black");
        document.getElementById("footer").classList.add("text-white");

        document.getElementById("article").classList.remove("text-black");
        document.getElementById("article").classList.add("text-white");

        document.getElementById("schedule").classList.remove("text-black");
        document.getElementById("schedule").classList.add("text-white");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.add("bg-secondary", "text-white");
        }

        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.add("bg-secondary", "text-white");
        }
      };

      document.getElementById("light").onclick = function () {
        document.body.style.backgroundColor = "white";

        document
          .getElementById("hero")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("hero")
          .classList.add("bg-danger-subtle", "text-black");

        document
          .getElementById("gallery")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("gallery")
          .classList.add("bg-danger-subtle", "text-black");

        document
          .getElementById("aboutme")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("aboutme")
          .classList.add("bg-danger-subtle", "text-black");

        document.getElementById("footer").classList.remove("text-white");
        document.getElementById("footer").classList.add("text-black");

        document.getElementById("article").classList.remove("text-white");
        document.getElementById("article").classList.add("text-black");

        document.getElementById("schedule").classList.remove("text-white");
        document.getElementById("schedule").classList.add("text-black");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.remove("bg-secondary", "text-white");
        }

        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.remove("bg-secondary", "text-white");
        }
      };
    </script>
  </body>
</html>