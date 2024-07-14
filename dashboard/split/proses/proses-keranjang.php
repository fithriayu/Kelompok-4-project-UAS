<?php

$id_user = $_SESSION['id_pelanggan'];
$id_menu = $_GET['id-masakan'];
$jlh = 1;
$status = '';

$cek = mysqli_query($koneksi, "select * from keranjang where id_user = '$id_user' and id_menu = '$id_menu'");

if ($cek->num_rows > 0) {
    mysqli_query($koneksi, "update keranjang set jlh = jlh+1 where id_user = '$id_user' and id_menu = '$id_menu'");
} else {
    $proses = mysqli_query($koneksi, "insert into keranjang (id_user, id_menu, jlh, status) values ('$id_user', '$id_menu', '$jlh', '$status')");
}

header("location:?hal=keranjang&pesan=berhasil");
