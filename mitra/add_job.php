<?php

include '../koneksi.php';

session_start();

$emailSession = $_SESSION['email'];
$get_data = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '$emailSession'");


?>

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
              <a class="sidebar-link" href="./add_job.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Tambahkan Pekerjaan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./job_list.php" aria-expanded="false">
                <span>
                  <i class="ti ti-list"></i>
                </span>
                <span class="hide-menu">Daftar Pekerjaan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./list_participants.php" aria-expanded="false">
                <span>
                  <i class="ti ti-id-badge"></i>
                </span>
                <span class="hide-menu">Daftar Peserta</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">ACCOUNT</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./profile.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">My Profile</span>
              </a>
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
                    <a href="./profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="../auth/logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <!-- Form Add Job -->
      <div class="container-fluid">
        <!-- Forms -->
        <div class="row mx-3">
          <div class="card-light card p-3">
            <form action="./input_job.php" enctype="multipart/form-data" method="post">
              <?php while ($row = mysqli_fetch_assoc($get_data)) { ?>
                <h3 class=" card-title fw-semibold text-center mb-5">Formulir Lowongan Kerja</h3>
                <div class="mb-3">
                  <label for="inputJobTitle" class="form-label">Nama Pekerjaan</label>
                  <input type="text" name="job_title" class="form-control" id="inputJobTitle" required>
                </div>
                <div class="mb-3">
                  <label for="inputJobType" class="form-label">Tipe Pekerjaan</label>
                  <select class="form-select" name="job_type" aria-label="selectJobType" id="inputJobType" required>
                    <option selected disabled value="">Pilih Tipe Pekerjaan</option>
                    <option value="fulltime">Full Time</option>
                    <option value="parttime">Part Time</option>
                    <option value="remote">Remote</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="inputJobExperience" class="form-label">Pengalaman Bekerja</label>
                  <select class="form-select" name="job_experience" aria-label="selectJobType" id="inputJobExperience" required>
                    <option selected disabled value="">Lama Pengalaman Bekerja</option>
                    <option value="freshgaduate">Fresh Gaduate</option>
                    <option value="kurang1tahun">Kurang dari 1 Tahun</option>
                    <option value="kurang2tahun">Kurang dari 2 Tahun</option>
                    <option value="lebih2tahun">lebih dari 2 Tahun</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="inputCompany" class="form-label">Nama Perusahaan</label>
                  <input type="text" name="company_name" class="form-control" id="inputCompany" value="<?php echo $row['name'] ?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="inputCompanyLocation" class="form-label">Lokasi Perusahaan</label>
                  <input type="text" name="company_location" class="form-control" id="inputCompanyLocation" required>
                </div>
                <div class="mb-3">
                  <label for="inputCompanyDescription" class="form-label">Deskripsi Perusahaan</label>
                  <textarea type="text" name="company_description" class="form-control" id="inputCompanyDescription" rows="8" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="inputJobDescription" class="form-label">Deskripsi Pekerjaan</label>
                  <textarea type="text" name="job_description" class="form-control" id="inputJobDescription" rows="8" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="inputJobRequirements" class="form-label">Persyaratan</label>
                  <textarea type="text" name="job_requirements" class="form-control" id="inputJobRequirements" rows="8" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="inputBenefits" class="form-label">Benefit</label>
                  <textarea type="text" name="benefits" class="form-control" id="inputBenefits" rows="8" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="inputLastDateToApply" class="form-label">Batas Lamaran</label>
                  <input type="date" name="last_apply" class="form-control" id="inputLastDateToApply" required>
                </div>
                <div class="mb-3">
                  <label for="inputCompanyLogo" class="form-label">Logo Perusahaan</label>
                  <input type="file" name="company_logo" accept=".jpg, .jpeg, .png" class="form-control" id="inputCompanyLogo" required>
                </div>
              <?php } ?>
              <input type="submit" class="btn btn-primary" value="Submit">
            </form>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
  </div>
  </div>
  <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../src/assets/js/sidebarmenu.js"></script>
  <script src="../src/assets/js/app.min.js"></script>
  <script src="../src/assets/js/dashboard.js"></script>
</body>

</html>