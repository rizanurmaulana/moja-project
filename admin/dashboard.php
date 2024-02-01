<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Moja</title>
  <link rel="shortcut icon" type="image/png" href="../src/assets/images/logos/logo-icon.png" />
  <link rel="stylesheet" href="../src/assets/css/styles.min.css" />
  <link rel="stylesheet" href="../src/assets/css/custom-style.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img">
            <img src="../src/assets/images/logos/logo-image.svg" width="100" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./dashboard.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">INFO LOKER</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./job_list.php" aria-expanded="false">
                <span>
                  <i class="ti ti-list"></i>
                </span>
                <span class="hide-menu">Daftar Pekerjaan</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">INFO USER</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./list_user.php" aria-expanded="false">
                <span>
                  <i class="ti ti-id-badge"></i>
                </span>
                <span class="hide-menu">Daftar Pengguna</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">ACCOUNT</span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../auth/logout.php" aria-expanded="false">
                <span>
                  <i class="ti ti-logout"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="../auth/logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <!--  Content -->
      <section id="home" class="d-flex">
        <div class="container px-1 px-md-5">
          <div class="row align-items-center" style="min-height: 100vh;">
            <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
              <h1 class="fw-bold mb-4 text-center text-lg-start">Jelajahi Peluang Karir Bergairah dan Capai Potensi Maksimal Anda!</h1>
              <h2 class="fs-6 fw-light mb-4 text-center text-lg-start">Temukan peluang kariermu dengan mudah melalui situs pencari kerja yang siap membantumu menemukan pekerjaan yang sesuai!</h2>
              <div class="d-flex justify-content-center justify-content-lg-start">
              </div>
            </div>
            <div class="col-lg-7 order-1 order-lg-2 hero-img">
              <img src="../src/assets/images/hero/hero-image.svg" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../src/assets/js/sidebarmenu.js"></script>
    <script src="../src/assets/js/app.min.js"></script>
    <script src="../src/assets/js/dashboard.js"></script>
</body>

</html>