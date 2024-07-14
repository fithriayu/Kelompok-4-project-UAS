<div class="container-fluid py-4">

  <div class="row">
    <div class="col-lg-12">
      <a href="#" onclick="window.print();" class="btn btn-outline-primary px-5"> Print </a>
    </div>
  </div>

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
                      <th class="text-uppercase text-sm font-weight-bolder text-center">ID</th>
                      <th class="text-uppercase text-sm font-weight-bolder">Nama Pelanggan</th>
                      <th class="text-uppercase text-sm font-weight-bolder">ID Order</th>
                      <th class="text-uppercase text-sm font-weight-bolder">Tanggal</th>
                      <th class="text-uppercase text-sm font-weight-bolder">Total Bayar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN user ON transaksi.id_user = user.id_user");
                    $t_totalbayar = 0;
                    while ($row = mysqli_fetch_array($data)) {
                    ?>
                      <tr>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['id_transaksi']; ?> </td>
                        <td class="text-sm font-weight-bold"> <?= $row['nama_user']; ?> </td>
                        <td class="text-sm font-weight-bold"> <?= $row['id_order']; ?> </td>
                        <td class="text-sm font-weight-bold"> <?= $row['tanggal']; ?> </td>
                        <td class="text-sm font-weight-bold"> Rp. <?= number_format($row['total_bayar'], 2, ',', '.') . ' -'; ?> </td>
                      </tr>
                    <?php
                      $t_totalbayar += $row['total_bayar'];
                    } ?>
                    <tr>
                      <td class="text-sm font-weight-bold">Total Pendapatan</td>
                      <td class="text-sm font-weight-bold"> Rp. <?= number_format($t_totalbayar, 2, ',', '.') . ' -'; ?> </td>
                    </tr>
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