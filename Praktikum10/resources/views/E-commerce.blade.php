<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Commerce</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('E-Commerce/assets')}}/img/favicon.png" rel="icon">
  <link href="{{asset('E-Commerce/assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('E-Commerce/assets/vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('E-Commerce/assets/vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('E-Commerce/assets/vendor')}}/aos/aos.css" rel="stylesheet">
  <link href="{{asset('E-Commerce/assets/vendor')}}/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('E-Commerce/assets/vendor')}}/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="{{asset('E-Commerce/assets')}}/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>E-Commerce<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#menu">Produk</a></li>
          <li><a href="pelanggan/form_pelanggan.php">Pemesanan</a></li>
          <li><a href="admin.php">Admin</a></li>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Belanja Produk<br>Secara Mudah</h2>
          <p data-aos="fade-up" data-aos-delay="100">E-Commerce transaksi jual beli secara elektronik melalui media internet. Selain itu, E-commerce juga dapat diartikan sebagai suatu proses berbisnis dengan memakai teknologi elektronik yang menghubungkan antara perusahaan, konsumen dan masyarakat dalam bentuk transaksi elektronik.</p>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{asset('E-Commerce/assets')}}/img/e-commerce.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Produk</h2>
          <p>Cek Produk  <span>Kamu Disini</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Elektronik</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Furniture</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Makanan</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Minuman</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Produk</p>
              <h3>Elektronik</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/AC.jpg" class="glightbox"><img src="{{asset('E-Commerce/assets')}}/img/menu/AC.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>AC</h4>
                <p class="ingredients">
                  AC atau air conditioner merupakan perangkat elektronik yang berfungsi sebagai pendingin ruangan ini menjadi solusi jitu mengatasi udara yang panas.
                </p>
                <p class="price">
                  Rp 4.000.000
                </p>
                <p class="price">
                  Stok : 10
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Kipas.jpg" class="glightbox"><img src="{{asset('E-Commerce/assets')}}/img/menu/Kipas.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Kipas Angin</h4>
                <p class="ingredients">
                  Kipas angin merupakan suatu alat yang dipergunakan untuk menghasilkan angin guna mendinginkan udara, serta memberikan efek menyegarkan di saat udara terasa panas.
                </p>
                <p class="price">
                  Rp 350.000
                </p>
                <p class="price">
                  Stok : 10
                </p>
              </div><!-- Menu Item -->
            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Produk</p>
              <h3>Furniture</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Meja.jpg" class="glightbox"><img src="{{asset('E-Commerce/assets')}}/img/menu/Meja.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Meja Belajar</h4>
                <p class="ingredients">
                  Meja yang difungsikan untuk membaca, menulis, dan yang pasti untuk belajar.
                </p>
                <p class="price">
                  Rp 2.000.000
                </p>
                <p class="price">
                  Stok : 6
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/RGC.png" class="glightbox"><img src="{{asset('E-Commerce/assets')}}/img/menu/RGC.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kursi Gaming</h4>
                <p class="ingredients">
                  Kursi gaming memiliki sandaran kepala yang disesuaikan dan empuk dengan sempurna. Kamu juga dapat merasakan bahwa beberapa otot, seperti otot punggung dan otot deltoid, tidak terbebani berkat pelindung melingkar di atas bahu.
                </p>
                <p class="price">
                  Rp 250.000.000
                </p>
                <p class="price">
                  Stok : 5
                </p>
              </div><!-- Menu Item -->
            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Produk</p>
              <h3>Makanan</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/mie.png" class="glightbox"><img src="{{asset('E-Commerce/assets')}}/img/menu/mie.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mie Goreng</h4>
                <p class="ingredients">
                  Mie Goreng adalah hidangan mie yang dimasak dengan digoreng tumis khas Indonesia. Makanan ini sangat populer dan dapat ditemui di mana-mana di Indonesia, mulai dari pedagang pinggir jalan (kaki lima) sampai restoran mewah.
                </p>
                <p class="price">
                  Rp 20.000
                </p>
                <p class="price">
                  Stok : 25
                </p>
              </div><!-- Menu Item -->
            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Produk</p>
              <h3>Minuman</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Sprite.png" class="glightbox"><img src="{{asset('E-Commerce/assets')}}/img/menu/Sprite.png" class="menu-img img-fluid" alt=""></a>
                <h4>Sprite</h4>
                <p class="ingredients">
                  Asam dan menyegarkan, Sprite adalah minuman ringan rasa lemon dan jeruk nipis terkemuka di dunia. Minuman berkarbonasi dalam kemasan dengan rasa lemon dan jeruk nipis, hadir dalam kemasan praktis botol kecil 250ml.
                </p>
                <p class="price">
                  Rp 4.500
                </p>
                <p class="price">
                  Stok : 20
                </p>
              </div><!-- Menu Item -->
            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              Pasir Gaok Tengah <br>
              Bogor<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Hubungi Kami</h4>
            <p>
              <strong>Phone:</strong> +6285772649631<br>
              <strong>Email:</strong> alfarissalman2419@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jadwal Buka Toko</h4>
            <p>
              <strong>Senin-Sabtu: 08:00</strong> - 23:00<br>
              Minggu: Tutup
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Salman Alfarisi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('E-Commerce/assets/vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('E-Commerce/assets/vendor')}}/aos/aos.js"></script>
  <script src="{{asset('E-Commerce/assets/vendor')}}/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('E-Commerce/assets/vendor')}}/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('E-Commerce/assets/vendor')}}/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('E-Commerce/assets/vendor')}}/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('E-Commerce/assets')}}/js/main.js"></script>

</body>

</html>