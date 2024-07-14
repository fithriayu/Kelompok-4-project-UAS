<?php

if (isset($_POST['btn_save'])) {

  $permitted_chars = '0123456789';
  $id_order        = substr(str_shuffle($permitted_chars), 0, 5);


  $nomeja     = $_POST['nomeja'];
  $tanggal     = $_POST['tanggal'];
  $pelanggan  = $_POST['pelanggan'];
  $keterangan = $_POST['keterangan'];
  $status     = 'Di Proses';
  $masakan    = $_POST['masakan'];

  mysqli_query($koneksi, "INSERT INTO orders 
                                        (id_order, no_meja, tanggal, id_user, keterangan, status_order) 
                                          VALUES
                                        ('$id_order','$nomeja', '$tanggal', '$pelanggan', '$keterangan', '$status')");

  mysqli_query($koneksi, "INSERT INTO detail_order 
                                        (id_order, id_masakan, keterangan, status_detail_order) 
                                          VALUES
                                        ('$id_order', '$masakan', '$keterangan', '$status')");

  header("location:index.php?pesan=berhasil");
}
?>

<div class="container-fluid py-4">
  <div class="row mb-3">
    <div class="col-lg-12">
      <h3> Tambah Data Order </h3>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">

      <div class="card">
        <div class="card-body p-3">
          <form enctype="multipart/form-data" action="" method="POST">

            <?php
            $q_masakan  = mysqli_query($koneksi, "SELECT * FROM masakan
                                            WHERE id_masakan = '" . $_GET['id-masakan'] . "'");

            $row_view  = mysqli_fetch_array($q_masakan);
            ?>

            <div class="position-relative">
              <a class="d-block shadow-xl border-radius-xl">
                <img src="../assets/img/masakan/<?= $row_view['foto']; ?>" alt="img-blur-shadow" class="card-img-top border-radius-xl">
              </a>
            </div>
            <div class="card-body px-1 pb-0">
              <p class="text-gradient text-dark mb-2 text-sm">Masakan #<?= $row_view['id_masakan']; ?></p>

              <span class="text-dark fs-5 font-weight-bold">
                <?= $row_view['nama_masakan']; ?>
              </span>
              <span class="text-dark fs-3 font-weight-bold">
                /
                <?= "Rp. " . number_format($row_view['harga'], 2, ",", "."); ?>
              </span>

              <div class="d-flex align-items-center justify-content-between">
              </div>
            </div>

            <hr>
            <h4 class="text-center mb-4"> Data Orderan </h4>

            <div class="form-group">
              <label> No Meja </label>
              <input type="number" min="1" name="nomeja" class="form-control" placeholder="No meja pemesan">
            </div>

            <div class="form-group">
              <label> Tanggal </label>
              <input type="datetime-local" name="tanggal" class="form-control">
            </div>

            <div class="form-group">
              <label> Keterangan </label>
              <textarea class="form-control" name="keterangan"></textarea>
            </div>

            <input type="hidden" name="masakan" value="<?= $row_view['id_masakan']; ?>">

            <input type="hidden" name="pelanggan" value="<?= $_SESSION['id_pelanggan']; ?>">

            <div class="form-group">
              <input type="submit" name="btn_save" value="Simpan" class="btn btn-outline-primary px-4 py-3">
              <input type="reset" name="btn_reset" value="Hapus" class="btn btn-outline-danger px-4 py-3">
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>