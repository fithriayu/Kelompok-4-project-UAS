<?php
include '../koneksi/koneksi.php';

if (isset($_SESSION['username'])) {
	// perintah jika session ada
	if ($_SESSION['level'] == 1) {
		// jika level = 1, arahkan ke admin
		header("location:admin/");
	} elseif ($_SESSION['level'] == 2) {
		// jika level = 2, arahkan ke waiter
		header("location:waiter/");
	} elseif ($_SESSION['level'] == 3) {
		header("location:kasir/");
	} else {
		header("location:pelanggan/");
	}
} else {
	// perintah jika session tidak ada
	header("location:../index.php?pesan=error");
}
