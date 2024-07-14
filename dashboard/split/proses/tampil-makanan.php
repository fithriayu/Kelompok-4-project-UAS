<div class="container-fluid py-4">

  <div class="row">
    <div class="col-lg-12">
      <?php
      if ($_SESSION['level'] != 4) { ?>
        <a href="?hal=add-makanan" class="btn btn-outline-primary px-5"> Tambah Data </a>
      <?php } ?>
    </div>
  </div>

  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "order") { ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon text-white"></span>
        <span class="alert-text text-white"> Orderan berhasil dibuat! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <?php } elseif ($_GET['pesan'] == "berhasil") { ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon text-white"></span>
        <span class="alert-text text-white"> Data masakan berhasil disimpan! </span>
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
                <table class="table table-bordered table-striped align-items-center mb-0" id="myTable">
                  <thead>
                    <tr class="table-primary">
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> ID </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Menu </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Kategori </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Harga / Porsi </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Status Masakan </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Aksi </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM masakan");
                    while ($row = mysqli_fetch_array($data)) {
                    ?>
                      <tr>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['id_masakan']; ?> </td>
                        <td class="text-sm font-weight-bold"> <?= $row['nama_masakan']; ?> </td>
                        <td class="text-sm font-weight-bold text-center"> <?= $row['kategori']; ?> </td>
                        <td class="text-sm font-weight-bold text-center"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -'; ?> </td>
                        <td class="text-sm font-weight-bold text-center">
                          <?php if ($row['status_masakan'] == 1) { ?>
                            <span class="btn btn-sm btn-success">Ready</span>
                          <?php } elseif ($row['status_masakan'] == 2) { ?>
                            <span class="btn btn-sm btn-warning">On Process</span>
                          <?php } ?>
                        </td>
                        <td class="text-sm font-weight-bold text-center">
                          <?php if ($_SESSION['level'] != 4) { ?>
                            <a class="btn btn-primary btn-sm p-2" href="?hal=edit-masakan&id-masakan=<?= $row['id_masakan']; ?>">
                              Edit
                            </a>
                          <?php } ?>
                          <button type="button" class="view_data btn btn-primary btn-sm p-2" data-bs-toggle="modal" id="<?= $row['id_masakan']; ?>" data-bs-target="#myModal">
                            Detail
                          </button>
                          <?php if ($_SESSION['level'] != 4) { ?>
                            <a href="?hal=hapus-masakan&id-masakan=<?= $row['id_masakan']; ?>" class="btn btn-danger btn-sm p-2"> Hapus </a>
                          <?php } ?>
                        </td>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Masakan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="dataMakanan">
      </div>
    </div>
  </div>
</div>