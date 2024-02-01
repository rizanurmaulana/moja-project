<?php

include '../koneksi.php';

$find_job = mysqli_query($connect, "SELECT * FROM tb_user WHERE name != 'admin'");
$modifiedData = [];

while ($row = mysqli_fetch_assoc($find_job)) {
  $modifiedData[] = $row;
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
      <div class="container-fluid">
        <!-- Title -->
        <div class="main main-app p-1">
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <div>
              <ol class="breadcrumb fs-sm mb-1">
                <li class="breadcrumb-item"><a href="#">Info Loker</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Peserta</li>
              </ol>
              <h4 class="main-title mb-0">
                <i class="ti ti-briefcase me-2"></i>
                List Peserta
              </h4>
            </div>
          </div>

          <!-- Table Job List -->
          <div class="row g-3">
            <div class="card card-light border">
              <div class="card-body">
                <?php if (empty($modifiedData)) { ?>
                  <p>No data available</p>
                <?php } else { ?>
                  <table class="table table-hover" id="datatables" width="100%">
                    <thead>
                      <tr style="font-weight: bold">
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Hp</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($modifiedData as $row) { ?>
                        <tr class="fs-3">
                          <td><?php echo $row["name"]; ?></td>
                          <td><?php echo $row["email"]; ?></td>
                          <td><?php echo $row["phone_number"]; ?></td>
                          <td><?php echo $row["role"]; ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                <?php } ?>
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