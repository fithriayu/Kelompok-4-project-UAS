<?php

if (isset($_POST['btn_save'])) {
  $n   = $_POST['nama'];
  $k   = $_POST['kategori'];
  $h   = $_POST['harga'];
  $s    = $_POST['status'];
  $f    = $_POST['foto_masakan'];

  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $nama_file              = strtolower($n . '-' . $_FILES['foto_masakan']['name']); // mengambil nama file yang ingin diupload
  $x                      = explode('.', $nama_file); // pisahkan nama file dengan limiter . (titik)
  $ekstensi               = strtolower(end($x));
  $file_tmp               = $_FILES['foto_masakan']['tmp_name']; // mendapatkan file sementara yang akan diupload
  $ukuran                 = $_FILES['foto_masakan']['size']; // mendapatkan ukuran file yg diupload

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    // jika ekstensi file sesuai
    if ($ukuran < 5044070) { // dicek, filenya harus kurang dari 1mb
      move_uploaded_file($file_tmp, '../assets/img/masakan/' . $nama_file);

      $query = mysqli_query($koneksi, "INSERT INTO masakan 
                                        (nama_masakan, harga, status_masakan, foto, kategori) 
                                          VALUES
                                        ('$n', '$h', '$s', '$nama_file', '$k')");

      header("location:?hal=makanan&pesan=berhasil");
    } else {
      // jika ukuran file yang diupload lebih dari 1mb
      header("location:?hal=add-makanan&pesan=ukuran");
    }
  } else {
    // jika ekstensi file salah
    header("location:?hal=add-makanan&pesan=ekstensi");
  }
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
              <input type="text" name="nama" class="form-control" placeholder="Isi nama..." required>
            </div>

            <div class="form-group">
              <label> Kategori </label>
              <select class="form-control" name="kategori" required>
                <option selected> -- Pilih Kategori -- </option>
                <option value="Main Menu"> Main Menu </option>
                <option value="Starters"> Starters </option>
                <option value="Snacks"> Snacks </option>
                <option value="Specialty"> Specialty </option>\
                <option value="Coffee"> Coffee </option>
                <option value="Healthy Drink"> Healthy Drink </option>
                <option value="Fresh Juice"> Fresh Juice </option>
              </select>
            </div>

            <div class="form-group">
              <label> Harga </label>
              <input type="number" min="0" name="harga" class="form-control" placeholder="..." required>
            </div>

            <div class="form-group">
              <label> Status Masakan </label>
              <select class="form-control" name="status" required>
                <option selected> -- Pilih Status -- </option>
                <option value="1"> Ready </option>
                <option value="2"> On Process </option>
                <option value="3"> Not Ready </option>
              </select>
            </div>

            <div class="form-group">
              <label> Foto Masakan </label>
              <input type="file" name="foto_masakan" class="form-control" required>
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