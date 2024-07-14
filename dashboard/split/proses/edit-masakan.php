<?php

$id = $_GET['id-masakan'];
$q  = mysqli_query($koneksi, "SELECT * FROM masakan WHERE id_masakan = '$id'");
$row = mysqli_fetch_array($q);

if (isset($_POST['btn_save'])) {
  $n   = $_POST['nama'];
  $h   = $_POST['harga'];
  $s    = $_POST['status'];
  $kategori = $_POST['kategori'];

  mysqli_query($koneksi, "UPDATE masakan SET
                          nama_masakan      = '$n',
                          harga             = '$h',
                          status_masakan    = '$s',
                          kategori          = '$kategori'
                          WHERE id_masakan  = '$id'");

  header("location:?hal=makanan&pesan=berhasil");
}

?>

<div class="container-fluid py-4">

  <!-- Pesan Error -->
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "ukuran") { ?>

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon text-white"></span>
        <span class="alert-text text-white"> Ukuran Foto Melebihi 5MB! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <?php } elseif ($_GET['pesan'] == "ekstensi") { ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-icon text-white"></span>
        <span class="alert-text text-white"> Ekstensi file tidak diperbolehkan! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <?php }
  } ?>
  <!-- Pesan Error -->

  <div class="row mb-3">
    <div class="col-lg-12">
      <h3> Tambah Data Masakan </h3>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">

      <div class="card">
        <div class="card-body p-3">
          <form enctype="multipart/form-data" action="" method="POST">

            <div class="form-group">
              <label> Nama Masakan </label>
              <input type="text" name="nama" class="form-control" placeholder="Isi nama..." value="<?= $row['nama_masakan']; ?>">
            </div>

            <div class="form-group">
              <label> Kategori </label>
              <select class="form-control" name="kategori">
                <option selected> -- Pilih Kategori -- </option>
                <option value="Main Menu" <?php if ($row['kategori'] == 'Main Menu') {
                                            echo 'selected';
                                          } ?>> Main Menu </option>
                <option value="Starters" <?php if ($row['kategori'] == 'Starters') {
                                            echo 'selected';
                                          } ?>> Starters </option>
                <option value="Snacks" <?php if ($row['kategori'] == 'Snacks') {
                                          echo 'selected';
                                        } ?>> Snacks </option>
                <option value="Specialty" <?php if ($row['kategori'] == 'Specialty') {
                                            echo 'selected';
                                          } ?>> Specialty </option>\
                <option value="Coffee" <?php if ($row['kategori'] == 'Coffee') {
                                          echo 'selected';
                                        } ?>> Coffee </option>
                <option value="Healthy Drink" <?php if ($row['kategori'] == 'Healthy Drink') {
                                                echo 'selected';
                                              } ?>> Healthy Drink </option>
                <option value="Fresh Juice" <?php if ($row['kategori'] == 'Fresh Juice') {
                                              echo 'selected';
                                            } ?>> Fresh Juice </option>
              </select>
            </div>

            <div class="form-group">
              <label> Harga </label>
              <input type="number" min="0" name="harga" class="form-control" placeholder="..." value="<?= $row['harga']; ?>">
            </div>

            <div class="form-group">
              <label> Status Masakan </label>
              <select class="form-control" name="status">
                <option> -- Pilih Status -- </option>
                <option value="1" <?php if ($row['status_masakan'] == 1) {
                                    echo 'selected';
                                  } ?>> Ready </option>
                <option value="2" <?php if ($row['status_masakan'] == 2) {
                                    echo 'selected';
                                  } ?>> On Process </option>
                <option value="3" <?php if ($row['status_masakan'] == 3) {
                                    echo 'selected';
                                  } ?>> Not Ready </option>
              </select>
            </div>

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