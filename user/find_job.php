<?php

include '../koneksi.php';

$find_job = mysqli_query($connect, "SELECT * FROM tb_add_job");
$modifiedData = [];

if (mysqli_num_rows($find_job) > 0) {
  while ($row = mysqli_fetch_assoc($find_job)) {
    if ($row["job_type"] == 'fulltime') {
      $row["job_type"] = 'Full Time';
    } else if ($row["job_type"] == 'parttime') {
      $row["job_type"] = 'Part Time';
    } else {
      $row["job_type"] = 'Remote';
    }

    if ($row["job_experience"] == 'freshgraduate') {
      $row["job_experience"] = 'Fresh Graduate';
    } else if ($row["job_experience"] == 'kurang1tahun') {
      $row["job_experience"] = 'Kurang dari 1 Tahun';
    } else if ($row["job_experience"] == 'kurang2tahun') {
      $row["job_experience"] = 'Kurang dari 2 Tahun';
    } else {
      $row["job_experience"] = 'Lebih dari 2 Tahun';
    }
    $modifiedData[] = $row;
  }
}

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
              <a class="sidebar-link" href="./find_job.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Cari Pekerjaan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./application_status.php" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Status Lamaran</span>
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
      <div class="container-fluid">
        <!--  Content -->
        <div class="main main-app p-1">
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <div>
              <ol class="breadcrumb fs-sm mb-1">
                <li class="breadcrumb-item"><a href="#">Info Loker</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cari Pekerjaan</li>
              </ol>
              <h4 class="main-title mb-0">
                <i class="ti ti-briefcase me-2"></i>
                Cari Pekerjaan
              </h4>
            </div>
          </div>

          <!-- Table Job List -->
          <div class="row mx-3">
            <!-- Card Job -->
            <?php if (empty($modifiedData)) : ?>
              <p>No job data available.</p>
            <?php else : ?>
              <?php foreach ($modifiedData as $row) { ?>
                <a href="<?php echo 'job_application.php?id_add_job=' . urlencode($row['id_add_job']); ?>" class="card-light text-black-50 card-job p-3 mb-3 row border rounded">
                  <div class="col-md-2 mb-4 mb-md-0 d-flex justify-content-center align-items-center">
                    <?php if (!empty($row["company_logo"])) : ?>
                      <img src="<?php echo "../mitra/uploads/" . $row["company_logo"]; ?>" class="img-fluid img-logo rounded" alt="company logo">
                    <?php else : ?>
                      <img src="../src/assets/images/logo-company/image-icon.png" class="img-fluid img-logo rounded" alt="company logo">
                    <?php endif; ?>
                  </div>
                  <div class="col-md-7 mb-4 mb-md-0">
                    <div class="card-body d-flex flex-column justify-content-center" style="height: 100%;">
                      <div class="d-flex align-items-center mb-2">
                        <h5 class="card-title me-3"><?php echo $row["job_title"]; ?></h5>
                        <small class="text-muted border py-1 px-2 rounded-pill bg-primary text-white"><?php echo $row["job_type"]; ?></small>
                      </div>
                      <div class="row">
                        <p class="card-text mb-1"><i class="ti ti-home pe-2"></i> <?php echo $row["company_name"]; ?></p>
                        <div class="d-flex">
                          <p class="pe-4 mb-0"><i class="ti ti-pin pe-2"></i><?php echo $row["company_location"]; ?></p>
                          <p class="mb-0"><i class="ti ti-briefcase pe-2"></i><?php echo $row["job_experience"]; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-2 mb-md-0">
                    <div class="d-flex flex-row flex-md-column justify-content-md-center align-items-start align-items-md-end" style="height: 100%;">
                      <p class="card-text me-2"><small class="text-muted">Dibuat pada <?php echo date("d M y", strtotime($row["posting_date"])); ?></small></p>
                      <p class="card-text"><small class="text-muted">Batas akhir lamaran <?php echo date("d M y", strtotime($row["last_apply"])); ?></small></p>
                    </div>
                  </div>
                </a>
              <?php } ?>
            <?php endif; ?>
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