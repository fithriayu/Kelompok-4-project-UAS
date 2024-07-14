<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Your Orders</p>
                <h5 class="font-weight-bolder mb-0">
                  <?php
                  $i = mysqli_query($koneksi, "SELECT * FROM orders 
                                        WHERE id_user = '" . $_SESSION['id_pelanggan'] . "'");
                  $o = mysqli_num_rows($i);
                  echo $o;
                  ?>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Menu</p>
                <h5 class="font-weight-bolder mb-0">
                  <?php
                  $u = mysqli_query($koneksi, "select * from masakan");
                  $d = mysqli_num_rows($u);
                  echo $d;
                  ?>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Transaksi</p>
                <h5 class="font-weight-bolder mb-0">
                  <?php
                  $u = mysqli_query($koneksi, "SELECT * from transaksi
                                                  WHERE id_user = '" . $_SESSION['id_pelanggan'] . "'");
                  $d = mysqli_num_rows($u);
                  echo $d;
                  ?>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-7 order-lg-1">
              <div class="d-flex flex-column h-100">
                <p class="mb-1 pt-2 text-bold"><?= $_SESSION['username']; ?></p>
                <h5 class="font-weight-bolder"><?= $_SESSION['nama']; ?></h5>
                <p class="mb-5"><?= $_SESSION['deskripsi']; ?></p>
              </div>
            </div>
            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0 order-lg-2">
              <div class="h-100">
                <div class="position-relative d-flex justify-content-end h-100">
                  <?php if (!empty($_SESSION['foto'])) { ?>
                    <img class="w-50 position-relative z-index-2 rounded-3" src="../assets/img/foto-profil/<?= $_SESSION['foto']; ?>" alt="rocket">
                  <?php } else { ?>
                    <img class="w-50 position-relative z-index-2 rounded-3" src="../assets/img/foto-profil/default.png" alt="rocket">
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- disini -->
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "berhasil") { ?>

      <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <span class="alert-icon text-white"></span>
        <span class="alert-text text-white"> Orderan anda akan kami proses! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <?php }
  } ?>

  <div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="table-responsive">
            <span class="text-left">
              <h4 class="pt-2"> Your Orders </h4>
              <p class="pb-4"> Your order history's will be catch in here</p>
            </span>

            <table class="table align-items-center mb-0">
              <tr class="table-primary">
                <th class="text-uppercase text-sm font-weight-bolder text-center"> ID </th>
                <th class="text-uppercase text-sm font-weight-bolder text-center"> No Meja </th>
                <th class="text-uppercase text-sm font-weight-bolder text-center"> Tanggal </th>
                <th class="text-uppercase text-sm font-weight-bolder text-center"> Keterangan </th>
                <th class="text-uppercase text-sm font-weight-bolder text-center"> Status Order </th>
              </tr>

              <?php
              $data = mysqli_query($koneksi, "SELECT * FROM orders WHERE id_user = '$_SESSION[id_pelanggan]' ORDER BY tanggal DESC");
              while ($orders = mysqli_fetch_array($data)) {
              ?>

                <tr>
                  <td class="text-sm font-weight-bold text-center"> <?= $orders['id_order']; ?> </td>
                  <td class="text-sm font-weight-bold text-center"> <?= $orders['no_meja']; ?> </td>
                  <td class="text-sm font-weight-bold text-center"> <?= $orders['tanggal']; ?> </td>
                  <td class="text-sm font-weight-bold"> <?= $orders['keterangan']; ?> </td>
                  <td class="text-sm font-weight-bold text-center">

                    <?php
                    if ($orders['status_order'] == 'Di Proses') { ?>
                      <span class="btn btn-primary btn-sm"> Di Proses</span>
                    <?php } elseif ($orders['status_order'] == 'Di Bayar') { ?>
                      <span class="btn btn-success btn-sm"> Di Bayar</span>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-center font-weight-bold"> </td>
                  <td colspan="3">
                    <table class="table table-striped align-items-center mb-0">
                      <?php
                      $no = 1;
                      $detail_data = mysqli_query($koneksi, "SELECT * FROM detail_order do JOIN masakan m ON do.id_masakan = m.id_masakan WHERE do.id_order = '" . $orders['id_order'] . "'");
                      while ($row = mysqli_fetch_array($detail_data)) {
                      ?>

                        <tr class="table-info">
                          <td class="text-uppercase text-sm font-weight-bolder text-center"> <?= $no++ ?></td>
                          <td class="text-uppercase text-sm font-weight-bolder">
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="../assets/img/masakan/<?= $row['foto']; ?>" class="avatar avatar-xl me-3" alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-md"> <?= $row['nama_masakan']; ?> </h6>
                                Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -'; ?>
                              </div>
                            </div>
                          </td>
                          <td class="text-uppercase text-sm font-weight-bolder text-end"> <?= $row['jlh'] ?> Porsi </td>
                          <td class="text-uppercase text-sm font-weight-bolder text-end"> Rp. <?= number_format($row['jlh'] * $row['harga'], 2, ',', '.') . ' -' ?> </td>
                        </tr>

                      <?php } ?>
                    </table>
                  </td>
                  <td class="text-center font-weight-bolder text-end"> Rp. <?= number_format($orders['totalbayar'], 2, ',', '.') . ' -' ?> </td>
                </tr>
              <?php } ?>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>