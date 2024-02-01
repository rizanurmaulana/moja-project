<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar</title>
  <link rel="shortcut icon" type="image/png" href="../src/assets/images/logos/logo-icon.png" />
  <link rel="stylesheet" href="../src/assets/css/styles.min.css" />
  <link rel="stylesheet" href="../src/assets/css/custom-style.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="../index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../src/assets/images/logos/logo-image.png" alt="Moja" width="100">
                </a>
                <p class="text-center">Temukan Pekerjaanmu</p>
                <form action="check_register.php" method="post">
                  <div class="mb-3">
                    <label for="inputtext" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="inputtext" aria-describedby="textHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="inputPhoneNumber" class="form-label">Nomor Telp/Hp</label>
                    <input type="text" name="phone_number" class="form-control" id="inputPhoneNumber" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="inputRole" class="form-label">Masuk Sebagai</label>
                    <select class="form-select" name="role" aria-label="selectRole" id="inputRole">
                      <option selected disabled value="">Pilih Role</option>
                      <option value="user">User</option>
                      <option value="mitra">Mitra</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" required>
                  </div>
                  <input type="submit" name="submit" value="Daftar" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah punya akun?</p>
                    <a class="text-primary fs-4 fw-bold ms-2" href="./login.php">Masuk</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>