<?php
require '../../koneksi/koneksi.php';

if ($_POST['id']) {

	$id = $_POST['id'];
	$view = $koneksi->query("SELECT * FROM masakan WHERE id_masakan='$id'");

	if ($view->num_rows) {
		$row_view = $view->fetch_assoc();

?>

		<!-- Disini konten kita -->


		<div class="card card-blog card-plain">
			<div class="position-relative">
				<a class="d-block shadow-xl border-radius-xl">
					<img src="../assets/img/masakan/<?= $row_view['foto']; ?>" alt="img-blur-shadow" class="card-img-top border-radius-xl">
				</a>
			</div>
			<div class="card-body px-1 pb-0">
				<p class="text-gradient text-dark mb-2 text-sm">Masakan #<?= $row_view['id_masakan']; ?></p>
				<a href="javascript:;">
					<span class="text-dark fs-5 font-weight-bold">
						<?= $row_view['nama_masakan']; ?>
					</span>
					<span class="text-dark fs-3 font-weight-bold">
						/
						<?= "Rp. " . number_format($row_view['harga'], 2, ",", "."); ?>
					</span>

				</a>
				<div class="d-flex align-items-center justify-content-between">
					<!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button> -->
				</div>
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

			<a href="?hal=proses-keranjang&id-masakan=<?= $row_view['id_masakan']; ?>" class="btn bg-gradient-primary">+ Add</a>

		</div>


<?php }
} ?>