<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-12">
      <a href="?hal=add-karyawan" class="btn btn-outline-primary px-5"> Tambah Data </a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <?php
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "berhasil") { ?>

          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
            <span class="alert-text text-white"> Data Berhasil Disimpan </span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

      <?php }
      } ?>
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
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> No </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Profil </th>
                      <th class="text-uppercase text-sm font-weight-bolder"> Username </th>
                      <th class="text-uppercase text-sm font-weight-bolder"> Deskripsi </th>
                      <th class="text-uppercase text-sm font-weight-bolder text-center"> Aksi </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM user u
                                                      JOIN level l
                                                      ON  u.id_level = l.id_level 
                                                          WHERE u.id_level =1 OR u.id_level = 2 OR u.id_level = 3");
                    while ($row = mysqli_fetch_array($data)) {
                    ?>

                      <tr>
                        <td class="text-sm font-weight-bold text-center"> <?= $no++; ?> </td>
                        <td class="text-sm font-weight-bold">
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/foto-profil/<?= $row['foto']; ?>" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"> <?= $row['nama_user']; ?> </h6>
                              <p class="text-xs text-secondary mb-0"> <?= $row['nama_level']; ?> </p>
                            </div>
                          </div>
                        </td>
                        <td class="text-sm font-weight-bold"> <?= $row['username']; ?> </td>
                        <td class="text-sm font-weight-bold">
                          <?php
                          $text = $row['deskripsi'];

                          if (str_word_count($text) > 10) {
                            echo substr($text, 0, 80) . " ...";
                          } else {
                            echo $text;
                          }
                          ?>
                        </td>
                        <td class="text-sm font-weight-bold text-center">
                          <a href="?hal=edit-user&id=<?= $row['id_user']; ?>" class="btn btn-warning btn-sm p-2">
                            Edit
                          </a>
                          <a href="?hal=hapus-karyawan&id-karyawan=<?= $row['id_user'] ?>" class="btn btn-danger btn-sm p-2"> Hapus </a>
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