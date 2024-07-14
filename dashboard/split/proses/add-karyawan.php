<?php

if (isset($_POST['btn_save'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama     = $_POST['nama'];
  $level    = $_POST['level'];
  $deskripsi = $_POST['deskripsi'];

  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'gif');
  $nama_file              = strtolower($username . '-' . $_FILES['foto_profil']['name']); // mengambil nama file yang ingin diupload
  $x                      = explode('.', $nama_file); // pisahkan nama file dengan limiter . (titik)
  $ekstensi               = strtolower(end($x));
  $file_tmp               = $_FILES['foto_profil']['tmp_name']; // mendapatkan file sementara yang akan diupload
  $ukuran                 = $_FILES['foto_profil']['size']; // mendapatkan ukuran file yg diupload

  $cek_username           = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
  $cek                    = mysqli_num_rows($cek_username);

  if ($cek > 0) {
    // kalau username sudah ada, muncul pesan error
    header("location:?hal=add-karyawan&pesan=username"); //munculkan pesan error
  } else {
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      // jika ekstensi file sesuai
      if ($ukuran < 5044070) { // dicek, filenya harus kurang dari 1mb
        move_uploaded_file($file_tmp, '../assets/img/foto-profil/' . $nama_file);

        $query = mysqli_query($koneksi, "INSERT INTO user 
                                        (username, password,nama_user, id_level, foto, deskripsi) 
                                          VALUES
                                        ('$username', '$password', '$nama', '$level', '$nama_file', '$deskripsi')");

        header("location:?hal=karyawan&pesan=berhasil");
      } else {
        // jika ukuran file yang diupload lebih dari 1mb
        header("location:?hal=add-karyawan&pesan=ukuran");
      }
    } else {
      // jika ekstensi file salah
      header("location:?hal=add-karyawan&pesan=ekstensi");
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
      <h3> Tambah Data Karyawan </h3>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">

      <div class="card">
        <div class="card-body p-3">
          <form enctype="multipart/form-data" action="" method="POST">
            <div class="form-group">
              <label> Username </label>
              <input type="text" name="username" class="form-control" placeholder="Isi username..." required>
            </div>

            <div class="form-group">
              <label> Password </label>
              <input type="password" name="password" class="form-control" placeholder="Isi password..." required>
            </div>

            <div class="form-group">
              <label> Nama Karyawan </label>
              <input type="text" name="nama" class="form-control" placeholder="Isi nama..." required>
            </div>

            <div class="form-group">
              <label> Jabatan </label>
              <select class="form-control" name="level" required>
                <option selected> -- Pilih Jabatan -- </option>
                <option value="1"> Admin </option>
                <option value="2"> Waiter </option>
                <option value="3"> Kasir </option>
              </select>
            </div>

            <div class="form-group">
              <label> Foto Profil </label>
              <input type="file" name="foto_profil" class="form-control" required>
            </div>

            <div class="form-group">
              <label> Deskripsi </label>
              <textarea class="form-control" name="deskripsi" required></textarea>
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