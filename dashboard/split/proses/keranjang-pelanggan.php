<div class="container-fluid py-4">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "berhasil") { ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon text-white"></span>
                <span class="alert-text text-white"> Menu Berhasil Dimasukkan ke Keranjang </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } elseif ($_GET['pesan'] == 'hapus') { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon text-white"></span>
                <span class="alert-text text-white"> Menu Berhasil Dihapus Dari Keranjang </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } elseif ($_GET['pesan'] == 'update') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon text-white"></span>
                <span class="alert-text text-white"> Menu Berhasil Diupdate Dari Keranjang </span>
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
                                <table class="table table-bordered table-striped align-items-center mb-0">
                                    <tr class="table-primary">
                                        <th class="text-uppercase text-sm font-weight-bolder text-center"> No </th>
                                        <th class="text-uppercase text-sm font-weight-bolder text-center"> Menu </th>
                                        <th class="text-uppercase text-sm font-weight-bolder text-center"> Jumlah </th>
                                        <th class="text-uppercase text-sm font-weight-bolder text-center"> Total </th>
                                        <th class="text-uppercase text-sm font-weight-bolder text-center"> Aksi </th>
                                    </tr>

                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM keranjang k JOIN masakan m WHERE m.id_masakan = k.id_menu and k.id_user= $_SESSION[id_pelanggan]");
                                    $grand_total = 0;

                                    if ($data->num_rows > 0) {
                                        while ($row = mysqli_fetch_array($data)) {
                                            $total_harga = $row['harga'] * $row['jlh'];
                                            $grand_total += $total_harga; ?>
                                            <tr>
                                                <td class="text-sm font-weight-bold text-center"> <?= $no++; ?> </td>
                                                <td class="text-sm font-weight-bold">
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
                                                <td class="text-sm font-weight-bold">
                                                    <form action="" method="POST" class="d-flex justify-content-center align-items-center">
                                                        <input type="number" name="jlh" class="form-control text-sm text-center px-1 me-2" style="width: 50px;" min="1" max="100" value="<?= $row['jlh'] ?>">
                                                        <input type="hidden" name="id-masakan" value="<?= $row['id_masakan'] ?>">
                                                        <button class="btn btn-sm btn-primary mt-3 px-2" type="submit" name="update-harga">Update</button>
                                                    </form>

                                                    <?php
                                                    if (isset($_POST['update-harga'])) {
                                                        $jlh = $_POST['jlh'];
                                                        $id_mas = $_POST['id-masakan'];

                                                        mysqli_query($koneksi, "update keranjang set jlh = '$jlh' where id_menu = '$id_mas' and id_user = $_SESSION[id_pelanggan]");

                                                        header("location:?hal=keranjang&pesan=update");
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-sm font-weight-bold">
                                                    Rp. <?= number_format($total_harga, 2, ',', '.') . ' -'; ?>
                                                </td>
                                                <td class="text-sm font-weight-bold text-center">
                                                    <a href="?hal=hapus-keranjang&id-masakan=<?= $row['id_masakan']; ?>" class="btn btn-danger btn-sm p-2 mt-3"> Hapus </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td class="text-sm font-weight-bold" colspan="3">Total Keseluruhan</td>
                                            <td class="text-md font-weight-bold" colspan="2">Rp. <?= number_format($grand_total, 2, ',', '.') . ' -'; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-bold" colspan="5">
                                                <div class="col-lg-5 offset-lg-7 p-2">
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="id-masakan" value="<?= $row['id_masakan'] ?>">

                                                        <div class="form-group">
                                                            <label> No Meja </label>
                                                            <input type="number" name="nomeja" class="form-control" placeholder="Masukkan No Meja">
                                                        </div>

                                                        <div class="form-group">
                                                            <label> Keterangan </label>
                                                            <textarea name="keterangan" class="form-control" rows="5" style="resize: none;"></textarea>
                                                        </div>

                                                        <button class="btn btn-md btn-primary mt-3" type="submit" name="proses-pesanan">Proses Pesanan</button>
                                                    </form>
                                                </div>

                                                <?php
                                                if (isset($_POST['proses-pesanan'])) {
                                                    // Mengatur timezone dan mendapatkan tanggal saat ini
                                                    date_default_timezone_set('Asia/Jakarta');
                                                    $tgl = date('Y-m-d H:i:s');

                                                    // Membuat ID order acak
                                                    $permitted_chars = '0123456789';
                                                    $id_order = substr(str_shuffle($permitted_chars), 0, 5);

                                                    // Memulai transaksi
                                                    mysqli_begin_transaction($koneksi);

                                                    try {
                                                        // Menambahkan data ke tabel orders
                                                        $no_meja = $_POST['nomeja'];
                                                        $keterangan_order = $_POST['keterangan'];
                                                        $total_bayar = $grand_total;  // Anda harus menghitung total bayar dari keranjang
                                                        $status_order = 'Di Proses';
                                                        $id_user = $_SESSION['id_pelanggan'];

                                                        mysqli_query($koneksi, "INSERT INTO orders (id_order, no_meja, tanggal, id_user, keterangan, totalbayar, status_order) VALUES ('$id_order', '$no_meja', '$tgl', '$id_user', '$keterangan_order', '$total_bayar', '$status_order')");

                                                        // Mengambil data dari tabel keranjang
                                                        $cek = mysqli_query($koneksi, "SELECT * FROM keranjang WHERE id_user = '$id_user'");

                                                        if (mysqli_num_rows($cek) > 0) {
                                                            while ($row = mysqli_fetch_assoc($cek)) {
                                                                $id_masakan = $row['id_menu'];
                                                                $jlh = $row['jlh'];
                                                                $status_detail = 'status';  // Ubah sesuai kebutuhan Anda

                                                                // Memasukkan data ke tabel detail_order
                                                                mysqli_query($koneksi, "INSERT INTO detail_order (id_order, id_masakan, status_detail_order, jlh) VALUES ('$id_order', '$id_masakan', '$status_detail', '$jlh')");
                                                            }
                                                        }

                                                        // Menghapus data dari keranjang
                                                        mysqli_query($koneksi, "DELETE FROM keranjang WHERE id_user = '$id_user'");

                                                        // Commit transaksi
                                                        mysqli_commit($koneksi);

                                                        // Redirect ke halaman keranjang dengan pesan sukses
                                                        header("location:index.php?pesan=order");
                                                    } catch (Exception $e) {
                                                        // Rollback transaksi jika terjadi kesalahan
                                                        mysqli_rollback($koneksi);
                                                        echo "Terjadi kesalahan: " . $e->getMessage();
                                                    }
                                                }
                                                ?>

                                            </td>
                                        </tr>
                                    <?php } else {
                                        echo "<tr><td colspan='5' class='text-center'>Keranjang belanja kosong</td></tr>";
                                    } ?>
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