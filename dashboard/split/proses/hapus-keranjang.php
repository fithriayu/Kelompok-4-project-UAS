<?php

$id_user = $_GET['id-masakan'];
mysqli_query($koneksi, "DELETE FROM keranjang WHERE id_menu = '$id_user'");

header("location: ?hal=keranjang&pesan=hapus");
