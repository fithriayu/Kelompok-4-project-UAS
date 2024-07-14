<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Halaman Login / E-Food
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">

  <?php

  include 'koneksi/koneksi.php';

  if (isset($_POST['btn_submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user 
                                        WHERE username = '$username'
                                        AND password = '$password'");

    $data = mysqli_fetch_array($query);

    if (!empty($data)) {
      // perintah jika data ada
      $_SESSION['username']   = $data['username']; // set session username
      $_SESSION['level']      = $data['id_level']; // set session level
      $_SESSION['nama']       = $data['nama_user'];
      $_SESSION['foto']       = $data['foto'];
      $_SESSION['deskripsi']  = $data['deskripsi'];
      $_SESSION['id_pelanggan'] = $data['id_user'];

      header('location:dashboard/index.php');
    } else {
      header('location:login.php?pesan=error');
    }
  }

  ?>

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h2 class="font-weight-bolder text-primary text-gradient">Welcome back</h2>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="">
                    <?php
                    if (isset($_GET['pesan'])) {
                      $pesan = $_GET['pesan'];

                      if ($pesan == "error") { ?>
                        <!-- pesan error -->
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                          <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                          <span class="alert-text text-white"><strong>Warning!</strong> Username atau Password anda tidak terdaftar! </span>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <!-- End Pesan Error -->
                      <?php } elseif ($pesan == 'logout') { ?>
                        <!-- pesan error -->
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                          <span class="alert-text text-white"><strong>Success!</strong> Anda telah berhasil Logout </span>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <!-- End Pesan Error -->
                      <?php } elseif ($pesan == 'berhasil') { ?>
                        <!-- pesan error -->
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                          <span class="alert-text text-white"><strong>Success!</strong> Akun anda berhasil dibuat, silahkan login menggunakan identitas akun yang telah didaftarkan </span>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <!-- End Pesan Error -->
                    <?php }
                    } ?>

                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Username" name="uname" required>
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="btn_submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="register.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/bg/bg.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="assets/js/core/"></script>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> The Hasturi
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>