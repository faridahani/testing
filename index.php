<?php
include "config/koneksi.php";

$ambil_data = mysqli_query($koneksi, "SELECT produk.nama, produk.harga, produk.deskripsi, produk.gambar, kategori.nama as kategori FROM produk INNER JOIN kategori on produk.kategori = kategori.id_kategori");
$data_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$query_keterangan = mysqli_query($koneksi, "SELECT * FROM keterangan where id_keterangan = 1");
$data_keterangan = mysqli_fetch_assoc($query_keterangan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $data_keterangan['title'] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+<?= $data_keterangan['no_telp'] ?></span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span><?= $data_keterangan['waktu_buka'] ?> : <?= $data_keterangan['jam_buka'] ?> - <?= $data_keterangan['jam_tutup'] ?> WIB</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="#"><?= $data_keterangan['title'] ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Toko Kami</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="https://wa.me/<?= $data_keterangan['no_telp'] ?>" class="book-a-table-btn scrollto">Pesan Sekarang</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span><?= $data_keterangan['head1'] ?></span></h2>
                <p class="animate__animated animate__fadeInUp"><?= $data_keterangan['kethead1'] ?></p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Daftar Menu</a>
                  <a href="https://wa.me/<?= $data_keterangan['no_telp'] ?>" class="btn-book animate__animated animate__fadeInUp scrollto">Pesan Sekarang</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><?= $data_keterangan['head2'] ?></h2>
                <p class="animate__animated animate__fadeInUp"><?= $data_keterangan['kethead2'] ?></p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Daftar Menu</a>
                  <a href="https://wa.me/<?= $data_keterangan['no_telp'] ?>" class="btn-book animate__animated animate__fadeInUp scrollto">Pesan Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><strong>Kelompok 1 techno guysMenjual beberapa kue kering dan kue basah</strong></h3>
              <p>
                Kami tidak hanya menyediakan kue kering, tetapi juga menyediakan kue basah yang bisa di pesan melalui pesanan di bawah ini
              </p>
              <p class="fst-italic">
                tidak hanya itu, kami juga menyediakan pesanan katering untuk undangan, pernikahan dan lain - lain
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Praktis</li>
                <li><i class="bx bx-check-double"></i> Cepat</li>
                <li><i class="bx bx-check-double"></i> Bersih dan higenis</li>
              </ul>
              <p>
                Semoga tetap berlangganan di toko kami dan pembeli merasa puas dengan hasil dan pelayanan yang ada di toko kami
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Mengapa Harus<span>Toko Kami</span></h2>
          <p> Kami memperhatikan hal hal berikut dalam proses produksi dan proses penjualan</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Kebersihan</h4>
              <p>Kebersihan akan menjadi hal yang paling utama di toko kami</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Tanggap</h4>
              <p>Toko Kami akan tanggap dalam menerima pelanggan</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Cepat</h4>
              <p>Toko kami menjamin cepat dan tanggap dalam menyelesaikan pemesanan, baik yang di order langsung ataupun secara katering</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Silahkan dilihat Menu<span> Kami</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Semua Menu</li>
              <?php foreach ($data_kategori as $ktgr) : ?>
                <li data-filter=".filter-<?= $ktgr['nama'] ?>"><?= $ktgr['nama'] ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>

        <div class="row menu-container">
          <?php foreach ($ambil_data as $data) : ?>
            <div class="col-lg-6 menu-item filter-<?= $data['kategori'] ?>">
              <div class="menu-content">
                <a href="#"><?= $data['nama'] ?></a><span>Rp. <?= $data['harga'] ?></span>
              </div>
              <img src="assets/img/<?= $data['gambar'] ?>" alt="" class="rounded float-right" width="100px" height="100px">
              <div class="menu-ingredients">
                <?= $data['deskripsi'] ?>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Kontak</span> Kami</h2>
          <p>Pembeli dapat menghubungi kami dan dapat mencari kami di sini</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="<?= $data_keterangan['peta'] ?>" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p><?= $data_keterangan['jalan'] ?><br> <?= $data_keterangan['kota'] ?></p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Buka:</h4>
              <p><?= $data_keterangan['waktu_buka'] ?> : <br> <?= $data_keterangan['jam_buka'] ?> - <?= $data_keterangan['jam_tutup'] ?> WIB</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><?= $data_keterangan['email'] ?></p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+<?= $data_keterangan['no_telp'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Kelompok 1 Techno</h3>
      <p>Makan Makan Makan Makan enak banget</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 1 Techno</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Kelompok 1 Techno</a>
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>