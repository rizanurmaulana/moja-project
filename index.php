<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Moja</title>
  <link rel="shortcut icon" type="image/png" href="./src/assets/images/logos/logo-icon.png" />
  <link rel="stylesheet" href="./src/assets/css/styles.min.css" />
  <link rel="stylesheet" href="./src/assets/css/custom-style.css">
  <link rel="stylesheet" href="./src/assets/css/navbar-style.css">
</head>

<body>
  <!-- Navbar Section -->
  <nav class="navbar border-bottom bg-body navbar-expand-lg fixed-top py-3 px-1 px-md-5">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">
        <img src="./src/assets/images/logos/logo-icon.png" alt="Moja" width="30">
        <span class="ps-2 fw-bold">Moja</span>
      </a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <a class="navbar-brand" href="./index.php">
            <img src="./src/assets/images/logos/logo-icon.png" alt="Moja" width="30">
            <span class="ps-2 fw-bold">Moja</span>
          </a>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#services">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#testimonial">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#team">Tim Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="./auth/login.php" class="btn btn-primary me-2">Masuk</a>
      <a href="./auth/register.php" class="btn btn-outline-primary">Daftar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="d-flex">
    <div class="container px-3 px-md-5  mb-5 mb-lg-1">
      <div class="row justify-content-between align-items-center" style="min-height: 100vh;">
        <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
          <h1 class="fw-bold mb-4 text-center text-lg-start">Jelajahi Peluang Karir Bergairah dan Capai Potensi Maksimal Anda!</h1>
          <h5 class="fw-light mb-4 text-center text-lg-start">Temukan peluang kariermu dengan mudah melalui situs pencari kerja yang siap membantumu menemukan pekerjaan yang sesuai!</h5>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="./auth/register.php" class="btn btn-primary fs-3">Daftar Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center order-1 order-lg-2 hero-img">
          <img src="./src/assets/images/landing-page/hero-image.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Partnership Section -->
  <div class="partnership mb-5 mb-lg-1" id="partnership">
    <div class="container">
      <div class="mb-3">
        <h5 class="text-center">Bekerja Sama Dengan Perusahaan Ternama</h5>
      </div>
      <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
        <div class="col-md-2 m-4">
          <img src="./src/assets/images/logo-company/logo-gojek.png" class="company_logo" alt="Logo Perusahaan">
        </div>
        <div class="col-md-2 m-4">
          <img src="./src/assets/images/logo-company/logo-bukalapak.png" class="company_logo" alt="Logo Perusahaan">
        </div>
        <div class="col-md-2 m-4">
          <img src="./src/assets/images/logo-company/logo-google.png" class="company_logo" alt="Logo Perusahaan">
        </div>
        <div class="col-md-2 m-4">
          <img src="./src/assets/images/logo-company/logo-mekari.png" class="company_logo" alt="Logo Perusahaan">
        </div>
        <div class="col-md-2 m-4">
          <img src="./src/assets/images/logo-company/logo-traveloka.png" class="company_logo" alt="Logo Perusahaan">
        </div>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <section id="about">
    <div class="container px-3 px-md-5 mb-5 mb-lg-1">
      <div class="row align-items-center justify-content-between" style="min-height: 100vh;">
        <div class="col-lg-6 hero-img">
          <img src="./src/assets/images/landing-page/about-image.svg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
          <h3 class="fw-bold mb-4 text-center text-lg-start">Tentang Kami</h3>
          <p class="fw-light mb-4 text-center text-lg-start">Moja adalah platform job portal inovatif yang membantu pencari kerja menemukan peluang karir sesuai keahlian dan minat. Dengan antarmuka user-friendly, Moja memberikan pengalaman efisien dalam mencari pekerjaan dengan ribuan lowongan dari berbagai industri.</p>
          <p class="fw-light mb-4 text-center text-lg-start">Situs job portal ini tidak hanya memberikan akses kepada pencari kerja, tetapi juga menjadi jembatan antara perusahaan dan calon karyawan potensial. Perusahaan dapat memanfaatkan platform ini untuk mengiklankan lowongan kerja, menjangkau audiens luas, dan menemukan bakat yang sesuai dengan kebutuhan organisasi, menciptakan peluang bagi pengembangan karir dan pertumbuhan perusahaan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services">
    <div class="container mb-5 mb-lg-1">
      <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4">Layanan</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              Menemukan pintu baru menuju pekerjaan impianmu dengan langkah-langkah modern
            </p>
          </div>
        </div>
        <div class="card-group d-flex flex-column flex-md-row">
          <div class="card rounded-3 m-3">
            <img src="./src/assets/images/landing-page/service-1.svg" class="pt-3" height="150px" alt="Foto Ilustrasi">
            <div class="card-body text-center">
              <h5 class="card-title">Mudah mengelola pelamar</h5>
              <p class="card-text"> Kelola pelamar dengan mudah untuk perekrutan yang lebih lancar.</p>
            </div>
          </div>
          <div class="card rounded-3 m-3">
            <img src="./src/assets/images/landing-page/service-2.svg" class="pt-3" height="150px" alt="Foto Ilustrasi">
            <div class="card-body text-center">
              <h5 class="card-title">Antarmuka pengguna yang ramah</h5>
              <p class="card-text">Nikmati antarmuka pengguna yang ramah untuk pengalaman yang lebih lancar.</p>
            </div>
          </div>
          <div class="card rounded-3 m-3">
            <img src="./src/assets/images/landing-page/service-3.svg" class="pt-3" height="150px" alt="Foto Ilustrasi">
            <div class="card-body text-center">
              <h5 class="card-title">Mencari karyawan sesuai dengan kriteria </h5>
              <p class="card-text">Temukan karyawan sesuai kriteria dengan mudah dan efisien untuk tim yang sukses.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Section -->
  <section id="testimonial">
    <div class="container mb-5 mb-lg-1">
      <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4">Testimoni</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              Dengarlah pengalaman langsung dari para pengguna kami, karena keberhasilan mereka adalah cerita terbaik.
            </p>
          </div>
        </div>

        <div class="row text-center d-flex align-items-stretch">
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card">
              <div class="card-up" style="background-color: #f6f5f9;"></div>
              <div class="avatar mx-auto bg-white">
                <img src="./src/assets/images/profile/rifki.jpg" class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Rifki Firansah</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Aplikasi ini sangat bermanfaat bagi para pencari kerja karena mudah digunakan dan menyediakan informasi yang lengkap. Desain aplikasinya yang bagus juga memudahkan pengguna baru.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card">
              <div class="card-up" style="background-color: #f6f5f9;"></div>
              <div class="avatar mx-auto bg-white">
                <img src="./src/assets/images/profile/saeful.png" class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Saeful Rohman</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Desain UI/UX terasa sudah baik, terutama dalam hal alur. Namun, ada beberapa fitur yang perlu ditambahkan untuk meningkatkan pengalaman terbaik bagi pengguna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-0 d-flex align-items-stretch">
            <div class="card testimonial-card">
              <div class="card-up" style="background-color: #f6f5f9;"></div>
              <div class="avatar mx-auto bg-white">
                <img src="./src/assets/images/profile/dias.jpg" class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Dias Dwi Gymnastyar</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Tampilan antarmuka (UI) sudah baik, namun terdapat beberapa kekurangan pada pengalaman pengguna (UX). Salah satunya adalah lebar form input yang terlalu besar, dan juga pemilihan warna yang kurang optimal karena kurang kontras.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team">
    <div class="container mb-5 mb-lg-1">
      <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4">Tim Kami</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              Bersatu dalam Kreativitas dan Dedikasi untuk Mewujudkan Proyek Web yang Luar Biasa
            </p>
          </div>
        </div>
        <div class="text-center d-flex justify-content-center align-items-center">
          <div class="col-md-6 mb-5 me-5 mb-md-0 d-flex">
            <div>
              <div class="avatar mx-auto bg-white">
                <img src="./src/assets/images/landing-page/agung.jpg" class="rounded-4 img-fluid team-img mb-3" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Agung Prayoga</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Back End Developer
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-md-0 d-flex">
            <div>
              <div class="avatar mx-auto bg-white">
                <img src="./src/assets/images/landing-page/riza.jpg" class="rounded-4 img-fluid team-img mb-3" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Riza Nur Maulana</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Front End Developer
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <div class="py-4">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="./src/assets/images/logos/logo-icon.png" alt="Moja" width="30">
              <span class="ps-2 fw-bold">Moja</span>
            </h6>
            <p>
              Platform job portal inovatif yang membantu pencari kerja menemukan peluang karir sesuai keahlian dan minat.
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Navigasi
            </h6>
            <p>
              <a href="#home" class="text-reset">Beranda</a>
            </p>
            <p>
              <a href="#about" class="text-reset">Tentang</a>
            </p>
            <p>
              <a href="#services" class="text-reset">Layanan</a>
            </p>
            <p>
              <a href="#testimonial" class="text-reset">Testimoni</a>
            </p>
            <p>
              <a href="#team" class="text-reset">Tim Kami</a>
            </p>
            <p>
              <a href="#contact" class="text-reset">Kontak</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 id="contact" class="text-uppercase fw-bold mb-4">
              Kontak
            </h6>
            <p><i class="fas fa-home me-3"></i> Kuningan, Jawa Barat</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              mojaproject@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center text-light p-4" style="background-color: #7e47e1;">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="#">Moja Project Production</a>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="./src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/80e4319211.js" crossorigin="anonymous"></script>
</body>

</html>