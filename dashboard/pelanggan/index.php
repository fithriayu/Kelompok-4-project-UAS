<!DOCTYPE html>
<html lang="en">
<?php include '../split/head.php'; ?>
<?php require '../../koneksi/koneksi.php'; ?>

<body class="g-sidenav-show  bg-gray-100">
  <?php include '../split/aside-pelanggan.php'; ?>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <?php include '../split/navbar.php'; ?>
    <!-- End Navbar -->
    <?php
    if (isset($_GET['hal'])) {
      $hal = $_GET['hal'];

      switch ($hal) {

        case 'makanan':
          include '../split/proses/tampil-makanan.php';
          break;

        case 'orderan':
          include '../split/proses/order-pelanggan.php';
          break;

        case 'keranjang':
          include '../split/proses/keranjang-pelanggan.php';
          break;
        case 'proses-keranjang':
          include '../split/proses/proses-keranjang.php';
          break;
        case 'hapus-keranjang':
          include '../split/proses/hapus-keranjang.php';
          break;

        default:
          echo 'halaman ga ada';
          break;
      }
    } else {
      include '../split/content-pelanggan.php';
    }
    ?>

  </main>
  <!--   Core JS Files   -->
  <?php include '../split/js.php' ?>
</body>

</html>