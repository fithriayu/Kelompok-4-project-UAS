<?php
$id = $_GET['id-masakan'];
mysqli_query($koneksi, "DELETE FROM masakan WHERE id_masakan = '$id'");
header("location:?hal=makanan");
?>