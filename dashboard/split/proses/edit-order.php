<?php

$i    = $_GET['id'];
$q    = mysqli_query($koneksi, "SELECT * from orders join detail_order ON orders.id_order = detail_order.id_order where orders.id_order = '" . $i . "'");
$row    = mysqli_fetch_array($q);

if (isset($_POST['btn_save'])) {

  $nomeja     = $_POST['nomeja'];
  $tanggal     = $_POST['tanggal'];
  $keterangan = $_POST['keterangan'];
  $status     = 'Di Proses';
  $masakan    = $_POST['masakan'];

  mysqli_query($koneksi, "UPDATE orders SET
                            no_meja = '$nomeja',
                            tanggal = '$tanggal',
                            keterangan = '$keterangan',
                            status_order = '$status'
                            WHERE id_order = '$i'");

  mysqli_query($koneksi, "UPDATE detail_order SET
                            id_masakan = '$masakan',
                            keterangan = '$keterangan',
                            status_detail_order = '$status'
                            WHERE id_order = '$i'");

  header("location:?hal=order&pesan=berhasil");
}
?>

<div class="container-fluid py-4">
  <div class="row mb-3">
    <div class="col-lg-12">
      <h3> Edit Data Order </h3>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">

      <div class="card">
        <div class="card-body p-3">
          <form enctype="multipart/form-data" action="" method="POST">

            <div class="form-group">
              <label> No Meja </label>
              <input type="number" min="1" name="nomeja" class="form-control" placeholder="No meja pemesan" value="<?= $row['no_meja']; ?>">
            </div>

            <div class="form-group">
              <label> Tanggal </label>
              <input type="datetime-local" name="tanggal" class="form-control" value="<?= $row['tanggal']; ?>">
            </div>

            <div class="form-group">
              <?php
              $m = mysqli_query($koneksi, "select * from masakan where id_masakan = '" . $row['id_masakan'] . "'");
              $dm = mysqli_fetch_array($m);
              ?>
              <label>Masakan yang dipilih sebelumnya > <?= $dm['nama_masakan']; ?></label>

              <select class="form-control" name="masakan">
                <option> -- Pilih Masakan -- </option>
                <?php

                $query  = mysqli_query($koneksi, "SELECT * FROM masakan");


                while ($data = mysqli_fetch_array($query)) { ?>
                  <option <?php if ($row['id_masakan'] == $data['id_masakan']) {
                            echo 'selected';
                          } ?> value="<?= $data['id_masakan']; ?>"> <?= $data['nama_masakan']; ?> </option>
                <?php }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label> Keterangan </label>
              <textarea class="form-control" name="keterangan"><?= $row['keterangan']; ?></textarea>
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