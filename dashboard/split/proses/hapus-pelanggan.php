<?php
$id_user = $_GET['id-pelanggan'];
mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id_user'");
header("location: ?hal=pelanggan&pesan=hapus");
?>