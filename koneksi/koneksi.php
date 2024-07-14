<?php
ob_start();
session_start();
//                       server     uname   pw  database
$koneksi = mysqli_connect("localhost", "root", "", "efood");

if(mysqli_connect_errno()) {
	echo "Database gagal terkoneksi - ".mysqli_connect_error();
}

?>