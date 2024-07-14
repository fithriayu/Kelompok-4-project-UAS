<?php
$id     = $_GET['id'];
$data   = mysqli_query($koneksi, "SELECT * FROM user 
                          WHERE id_user = '" . $id . "'");

$row    = mysqli_fetch_array($data);

if (isset($_POST['btn_save'])) {
  $username = $_POST['username'];
  $nama     = $_POST['nama'];
  $level    = $_POST['level'];
  $deskripsi = $_POST['deskripsi'];

  $query = mysqli_query($koneksi, "UPDATE user SET
                                    username  = '$username',
                                    nama_user = '$nama',
                                    id_level  = '$level',
                                    deskripsi = '$deskripsi'
                                    WHERE id_user = '$id'");

  if (isset($_GET['hal'])) {
    if ($_GET['hal'] == 'edit-pelanggan') {
      header("location:?hal=pelanggan&pesan=berhasil");
    } else {
      header("location:?hal=karyawan&pesan=berhasil");
    }
  }
}

?>

<div class="container-fluid py-4">

  <!-- Pesan Error -->
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "username") { ?>

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon text-white"></span>
        <span class="alert-text text-white"> Username sudah ada! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <?php } elseif ($_GET['pesan'] == "ukuran") { ?>

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
      <h3> Edit Data User </h3>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">

      <div class="card">
        <div class="card-body p-3">
          <form enctype="multipart/form-data" action="" method="POST">
            <div class="form-group">
              <label> Username </label>
              <input type="text" name="username" class="form-control" placeholder="Isi username..." value="<?= $row['username']; ?>">
            </div>

            <div class="form-group">
              <label> Nama Karyawan </label>
              <input type="text" name="nama" class="form-control" placeholder="Isi nama..." value="<?= $row['nama_user']; ?>">
            </div>

            <?php
            if ($row['id_level'] != 4) { ?>

              <div class="form-group">
                <label> Jabatan </label>
                <select class="form-control" name="level">
                  <option> -- Pilih Jabatan -- </option>
                  <option value="1" <?php if ($row['id_level'] == 1) {
                                      echo 'selected';
                                    } ?>> Admin </option>
                  <option value="2" <?php if ($row['id_level'] == 2) {
                                      echo 'selected';
                                    } ?>> Waiter </option>
                  <option value="3" <?php if ($row['id_level'] == 3) {
                                      echo 'selected';
                                    } ?>> Kasir </option>
                </select>
              </div>

            <?php } else { ?>

              <div class="form-group">
                <label> Jabatan </label>
                <select class="form-control" name="level">
                  <option> -- Pilih Jabatan -- </option>
                  <option value="4" <?php if ($row['id_level'] == 4) {
                                      echo 'selected';
                                    } ?>> Pelanggan </option>
                </select>
              </div>

            <?php } ?>

            <div class="form-group">
              <label> Deskripsi </label>
              <textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
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