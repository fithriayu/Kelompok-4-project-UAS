<?php

$get_id_order	= $_GET['id_order'];
$data 			= mysqli_query($koneksi, "SELECT * FROM
											orders WHERE
											id_order = '" . $get_id_order . "'");

$a_o 			= mysqli_fetch_array($data);
$tgl 			= $a_o['tanggal'];
$user 			= $a_o['id_user'];
$total			= $a_o['totalbayar'];

mysqli_query($koneksi, "INSERT INTO  
						transaksi (id_user, id_order, tanggal, total_bayar) VALUES
						('$user', '$get_id_order', '$tgl', '$total')");

mysqli_query($koneksi, "UPDATE orders SET status_order = 'Di Bayar' WHERE id_order = '$get_id_order'");

header("location:?hal=transaksi");
