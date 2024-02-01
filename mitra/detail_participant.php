<?php

include '../koneksi.php';

session_start();

$id_form_apply = urldecode($_GET['id_form_apply']);

$form_apply = mysqli_query($connect, "SELECT * FROM tb_form_apply WHERE id_form_apply = '$id_form_apply'");
$modifiedData = [];

if (mysqli_num_rows($form_apply) > 0) {
  while ($row = mysqli_fetch_assoc($form_apply)) {
    if ($row["job_type"] == 'fulltime') {
      $row["job_type"] = 'Full Time';
    } else if ($row["job_type"] == 'parttime') {
      $row["job_type"] = 'Part Time';
    } else {
      $row["job_type"] = 'Remote';
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
      <div class="container-fluid">
        <!-- Forms -->
        <div class="row mx-3">
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <div>
              <ol class="breadcrumb fs-sm mb-1">
                <li class="breadcrumb-item"><a href="#">Info Loker</a></li>
                <li class="breadcrumb-item"><a href="./list_participants.php">List Peserta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Peserta</li>
              </ol>
              <h4 class="main-title mb-0">
                <i class="ti ti-briefcase me-2"></i>
                Detail Peserta
              </h4>
            </div>
          </div>


          <div class="card-light card p-3">
            <h3 class=" card-title fw-semibold text-center mb-5">Formulir Lamaran Pekerjaan</h3>
            <?php foreach ($modifiedData as $row) { ?>
              <div class="mb-3">
                <label for="inputFullname" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" id="inputFullname" value="<?php echo $row['name']; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="getJobTitle" class="form-label">Nama Pekerjaan</label>
                <input type="text" name="job_title" class="form-control" id="getJobTitle" value="<?php echo $row["job_title"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="getCompanyName" class="form-label">Nama Perusahaan</label>
                <input type="text" name="company_name" class="form-control" id="getCompanyName" value="<?php echo $row["company_name"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="getCompanyLocation" class="form-label">Domisili</label>
                <input type="text" name="company_location" class="form-control" id="getCompanyLocation" value="<?php echo $row["company_location"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="getJobType" class="form-label">Tipe Pekerjaan</label>
                <input type="text" name="job_type" class="form-control" id="getJobType" value="<?php echo $row["job_type"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="inputBirdhDate" class="form-label">Tanggal Lahir</label>
                <input type="date" name="birth_date" class="form-control" id="inputBirdhDate" value="<?php echo $row["birth_date"]; ?>" readonly>
              </div>
              <div class="mb-3">
                <div class="mb-3">
                  <label for="inputAddress" class="form-label">Alamat Saat Ini</label>
                  <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Alamat Lengkap" value="<?php echo $row["address"]; ?>" readonly>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="text" name="subdistrict" class="form-control" placeholder="Kecamatan" value="<?php echo $row["subdistrict"]; ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="text" name="city" class="form-control" placeholder="Kota" value="<?php echo $row["city"]; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <input type="text" name="province" class="form-control" placeholder="Provinsi" value="<?php echo $row["province"]; ?>" readonly>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="postal_code" class="form-control" placeholder="Kode Pos" value="<?php echo $row["postal_code"]; ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $row['email']; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="inputPhoneNumber" class="form-label">No. Hp</label>
                <input type="text" name="phone_number" class="form-control" id="inputPhoneNumber" value="<?php echo $row['phone_number']; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="inputResume" class="form-label">File Resume</label>
                <iframe class="form-control" id="inputResume" src="<?php echo "../user/uploads/" . $row["resume"]; ?>" readonly scrolling="auto" height="500px" width="100%"></iframe>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <!-- row -->
    </div>
  </div>
  <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../src/assets/js/sidebarmenu.js"></script>
  <script src="../src/assets/js/app.min.js"></script>
  <script src="../src/assets/js/dashboard.js"></script>
</body>

</html>