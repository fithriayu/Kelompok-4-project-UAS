<!DOCTYPE html>
<html lang="en">
<?php include '../split/head.php'; ?>
<?php require '../../koneksi/koneksi.php'; ?>
<body class="g-sidenav-show  bg-gray-100">
  <?php include '../split/aside-kasir.php'; ?>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <?php include '../split/navbar.php'; ?>
    <!-- End Navbar -->
    <?php
      if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];

        switch ($hal) {
          case 'pelanggan':
            include '../split/proses/tampil-pelanggan.php';  
            break;
          case 'order':
            include '../split/proses/tampil-order.php';
            break;
          case 'transaksi':
            include '../split/proses/tampil-transaksi.php';
            break;
          case 'add-pelanggan':
            include '../split/proses/add-pelanggan.php';
            break;
          case 'add-order':
            include '../split/proses/add-order.php';
            break;
          case 'add-transaksi':
            include '../split/proses/add-transaksi.php';
            break;
          case 'hapus-pelanggan':
            include '../split/proses/hapus-pelanggan.php';
            break;
          case 'orderan':
            include '../split/proses/orderan.php';
            break;
          case 'edit-pelanggan':
            include '../split/proses/edit-user.php';
            break;
          case 'edit-order':
            include '../split/proses/edit-order.php';
            break;
          default:
            echo 'halaman ga ada';
            break;
        }
      } else {
        include '../split/content.php'; 
      }
    ?>
  </main> 
  <!--   Core JS Files   -->
  <?php include '../split/js.php' ?>
</body>
</html>