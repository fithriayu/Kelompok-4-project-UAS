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

  header("location:?hal=order&pesan=berhasil");
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

            <div class="form-group">
              <label> No Meja </label>
              <input type="number" min="1" name="nomeja" class="form-control" placeholder="No meja pemesan" required>
            </div>

            <div class="form-group">
              <label> Tanggal </label>
              <input type="datetime-local" name="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
              <label> Pelanggan </label>
              <select class="form-control" name="pelanggan" required>
                <option selected> -- Pilih Pelanggan -- </option>
                <?php

                $query  = mysqli_query($koneksi, "SELECT * FROM user WHERE id_level = 4");


                while ($data = mysqli_fetch_array($query)) { ?>
                  <option value="<?= $data['id_user']; ?>"> <?= $data['nama_user']; ?> </option>
                <?php }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label> Masakan </label>
              <select class="form-control" name="masakan" required>
                <option selected> -- Pilih Masakan -- </option>
                <?php

                $query  = mysqli_query($koneksi, "SELECT * FROM masakan");


                while ($data = mysqli_fetch_array($query)) { ?>
                  <option value="<?= $data['id_masakan']; ?>"> <?= $data['nama_masakan']; ?> </option>
                <?php }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label> Keterangan </label>
              <textarea class="form-control" name="keterangan" required></textarea>
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