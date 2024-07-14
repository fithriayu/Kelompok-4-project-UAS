<div class="container-fluid py-4">

  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "berhasil") { ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon text-white"></span>
        <span class="alert-text text-white"> Orderan berhasil disimpan! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <?php }
  } ?>

  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-striped align-items-center mb-0">
                  <thead>
                    <tr class="table-primary">
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> # </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> ID </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> No Meja </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Tanggal </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Pelanggan </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Keterangan </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Status Order </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Aksi </th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM orders o JOIN user u WHERE o.id_user = u.id_user");
                    while ($row = mysqli_fetch_array($data)) {
                    ?>
                      <tr>
                        <td class="text-sm font-weight-bold text-center">
                          <?php
                          $t  = mysqli_query($koneksi, "SELECT * from transaksi 
                            where id_order = '" . $row['id_order'] . "'");
                          $a  = mysqli_num_rows($t);
                          if ($a == 0) { ?>
                            <a href="?hal=add-transaksi&id_order=<?= $row['id_order']; ?>" class="btn btn-outline-primary"> Bayar </a>
                          <?php } else { ?>
                            <a href="#" onclick="return confirm('Transaksi sudah dibayar')" class="btn btn-outline-success"> Sudah Dibayar </a>
                          <?php }
                          ?>

                        </td>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['id_order']; ?> </td>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['no_meja']; ?> </td>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['tanggal']; ?> </td>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['nama_user']; ?> </td>
                        <td class="text-sm font-weight-bold text-center word-wrap"> <?= $row['keterangan']; ?> </td>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['status_order']; ?> </td>
                        <td class="text-sm font-weight-bold text-center"> <a href="?hal=edit-order&id=<?= $row['id_order']; ?>" class="btn btn-primary btn-sm p-2"> Edit </a> </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>